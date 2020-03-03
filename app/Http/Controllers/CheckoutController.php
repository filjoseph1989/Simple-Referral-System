<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Credit;
use App\Models\Invoice;
use App\Models\GiftCard;
use App\Models\GiftCardUser;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $item, $id)
    {
        session(['checkout' => "checkout/{$item}/{$id}"]);

        $item = self::item($item, $id);

        return view('checkout')->with(compact('item'));
    }

    /**
     * Check item being checkout
     *
     * @param string $item
     * @param int $id
     * @return object
     */
    private function item($item, $id)
    {
        switch ($item) {
            case 'giftcard':
                $item = GiftCard::find($id);
                break;
        }

        return $item;
    }

    /**
     * Proceed checkout
     *
     * @param Request $request
     * @return void
     */
    public function checkout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('get.login.form');
        }

        $request->validate([
            'quantity'  => 'required'
        ]);

        $data = $request->all();

        if ($data['quantity'] <= 0) {
            return back()->with('status', [
                'message' => "Quantity must be greater than zero",
                'class' => 'text-red-600'
            ]);
        }

        $method = $data['method'];

        if (method_exists($this, $method)) {
            $result = $this->$method($data);
            if ($result === 0) {
                return back()->with('status', [
                    'message' => "We currently out of stack",
                    'class' => 'text-red-600'
                ]);
            }

            if ($result === 1) {
                return back()->with('status', [
                    'message' => "You don't have enough credit points",
                    'class' => 'text-red-600'
                ]);
            }
        }

        $description = json_encode($result['gift']->toArray());

        Invoice::create([
            'user_id'     => Auth::id(),
            'description' => $description,
            'code'        => bin2hex(random_bytes(4)),
            'currency'    => 'php',
            'sub-total'   => '0.00', # this value for now
            'total'       => '0.00' # this value for now
        ]);

        return view('invoice')->with($result);
    }

    /**
     * Using payment method
     *
     * @param array $data
     * @return array
     */
    private function pay($data)
    {
        $gift = GiftCard::find($data['item']);

        if (is_null($gift)) {
            return (int) 0;
        }

        if ($gift->quantity <= 0) {
            return (int) 0;
        }

        try {
            self::process($data, $gift);                         
        } catch (\Exception $e) {
        }

        return [
            'gift'     => $gift,
            'points'   => 0,
            'quantity' => $data['quantity'],
            'pay'      => true,
        ];
    }

    /**
     * Proceed checkout using credit
     *
     * @param array $data
     * @return mixed
     */
    private function credit($data)
    {
        $gift = GiftCard::find($data['item']);

        if (is_null($gift)) {
            return (int) 0;
        }

        if ($gift->quantity <= 0) {
            return (int) 0;
        }

        $credit = Credit::where('user_id', Auth::id())->first();

        if (is_null($credit)) {
            return (int) 1;
        }

        $points = $data['quantity'] * $gift->points;

        if ($points > $credit->points) {
            return (int) 1;
        }

        try {
            self::process($data, $gift, $points, $credit);
        } catch (\Exception $e) {
        }

        return [
            'gift'     => $gift,
            'points'   => $points,
            'quantity' => $data['quantity'],
        ];
    }

    /**
     * Process gift card purchase
     *
     * @param array $data
     * @param object $gift
     * @param mixed $credit
     * @return void
     */
    private function process(&$data, &$gift, $points = null, $credit = null)
    {
        if ($data['quantity'] <= $gift->quantity) {
            $gift->quantity = $gift->quantity - $data['quantity'];

            if ($gift->save()) {
                $giftcarduser = GiftCardUser::where('user_id', Auth::id())
                    ->where('gift_card_id', $data['item']);

                $decrement = false;

                if ($giftcarduser->count() > 0) {
                    $giftcarduser->increment('quantity', $data['quantity']);
                    $decrement = true;
                } else {
                    GiftCardUser::create([
                        'user_id'      => Auth::id(),
                        'gift_card_id' => $data['item'],
                        'quantity'     => $data['quantity']
                    ]);
                    $decrement = true;
                }

                if ($decrement && !is_null($credit) && !is_null($points)) {
                    $credit->decrement('points', $points);
                }
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftCard;

class GiftCardController extends Controller
{
    /**
     * Display a gift card page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gift = GiftCard::paginate(10); # Task 10

        return view('giftcard.index')->with(compact('gift'));
    }

    /**
     * Store gift card
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required',
            'quantity'    => 'required',
            'points'      => 'required',
            'expiration'  => 'required',
        ]);

        $gift = GiftCard::create($data);

        if ($gift->wasRecentlyCreated) {
            return back()->with('status', [
                'message' => "Successfully added gift cards",
                'class' => 'text-green-600'
            ]);
        }

    }
}

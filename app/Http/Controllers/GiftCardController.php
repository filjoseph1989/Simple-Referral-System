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
        $gift = GiftCard::paginate(10);

        return view('giftcard.index')->with(compact('gift'));
    }

    /**
     * Store gift card
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->validate();
        
        $data = $request->all();
        $gift = GiftCard::create($data);

        if ($gift->wasRecentlyCreated) {
            return back()->with('status', [
                'message' => "Successfully added gift cards",
                'class' => 'text-green-600'
            ]);
        }

    }
}

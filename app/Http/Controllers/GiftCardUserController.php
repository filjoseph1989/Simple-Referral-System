<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\GiftCardUser;
use Illuminate\Http\Request;

class GiftCardUserController extends Controller
{
    /**
     * Display a gift card page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gift = GiftCardUser::with('gift_card')
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(10); # Task 10

        return view('giftcard.index_user')->with(compact('gift'));
    }
}

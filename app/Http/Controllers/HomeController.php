<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\GiftCard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $giftCard = GiftCard::paginate(10); # Task 10

        return view('welcome')->with(compact('giftCard'));
    }
}

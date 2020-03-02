<?php

namespace App\Http\Controllers;

use Auth;
use App\Classes\Invitation;
use App\Models\Credit;
use App\Models\Referral;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = (new Invitation(new Referral()))->code();

        $credit = Credit::where('user_id', Auth::id())->first();

        return view('home')->with(compact('code', 'credit'));
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\Classes\Invitation;
use App\Models\Credit;
use App\Models\Referral;
use App\Models\RoleUser;
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
        $role = RoleUser::with('role')->where('user_id', Auth::id())->first();

        session(['role' => $role]);

        $code = (new Invitation(new Referral()))->code();

        $credit = Credit::where('user_id', Auth::id())->first();

        return view('home')->with(compact('code', 'credit'));
    }
}

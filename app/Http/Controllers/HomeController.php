<?php

namespace App\Http\Controllers;

use Auth;
use App\Classes\Invitation;
use App\Models\Referral;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = (new Invitation(new Referral()))->code();

        return view('home')->with(compact('code'));
    }
}

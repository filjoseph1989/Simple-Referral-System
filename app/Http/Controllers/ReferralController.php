<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Mail\Invitation;
use App\Models\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code)
    {
        return redirect()
            ->route('get.signup.form')
            ->with('invitation_code', $code);
    }

    /**
     * Send invitaion through email
     *
     * @param Request $request
     * @return void
     */
    public function send(Request $request)
    {
        $data = $request->all();

        if (self::hasUser($data)) {
            return back()->with('status', [
                'message' => "{$data['name']} is already a member",
                'class' => "text-red-600"
            ]);
        }

        $data['invitor'] = Auth::user()->name ?? '';

        Mail::to($data['email'])->send(new Invitation($data));

        return back()->with('status', [
            'message' => "Successfully sent invitation to {$data['name']}",
            'class' => "text-green-600"
        ]);
    }

    /**
     * Check if email exist
     *
     * @return boolean
     */
    private function hasUser(&$data)
    {
        $user = User::where('email', $data['email']);

        if ($user->count() > 0) {
            return true;
        }

        return false;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;
use App\Classes\UserCredits;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Referral;
use App\Models\Credit;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $credit = (new UserCredits($data))->credit();

        $user = User::create([
            'name'     => "{$data['first_name']} {$data['last_name']}",
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        self::creditUser($user, $credit);
        self::role($user);

        return $user;
    }

    /**
     * Add user credit
     *
     * @param  App\User $user
     * @return void
     */
    private function creditUser(&$user, $credit)
    {
        if ($credit) {
            Credit::create([
                'user_id' => $user->id,
                'points'  => 2
            ]);
        }
    }

    /**
     * Assign role
     *
     * @param  App\User $user
     * @return void
     */
    private function role(&$user)
    {
        DB::table('role_users')->insert([
            [
                'user_id'    => $user->id,
                'role_id'    => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}

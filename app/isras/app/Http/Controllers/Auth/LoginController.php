<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Admin;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function adminLoginForm() {
        return view('pages.admin.login');
    }
    
    public function logout() {
        Auth::logout();

        return redirect()->route('/');
    }

    public function login(Request $request) {
        if($request['user_type'] == 1) { // admin
            $credential = [
                'email' => $request['email'],
                'password' => $request['password']
            ];

            if(Auth::attempt($credential))
                return redirect()->route('/');
        } else { // user
            $credential = [
                'email' => $request['email'],
                'password' => $request['password']
            ];

            if(Auth::attempt($credential))
                return redirect()->route('/');
        }
    }
}

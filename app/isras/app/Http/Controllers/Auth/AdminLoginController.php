<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() {
        return view('pages.admin.login')
            ->with([
                'userType' => 1
            ]);
    }

    public function login(Request $request) {
        // validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        // attempt login
        if(Auth::guard('admin')->attempt($credential, $request->remember))
            return redirect()->intended(route('/')); // success
        else
            return redirect()->back()->withInput($request->only('email')); // not success
    }
    
    public function logout() {
        Auth::logout();

        return redirect()->route('/');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Admin;
use App\User;
use App\Entity;

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

    public function username()
    {
        return 'email';
    }

    public function showLoginForm() {
        return view('pages.login');
    }
    
    public function logout() {
        Auth::logout();

        return redirect('/');
    }

    public function login(Request $request) {
        $credential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if(Auth::guard('entities')->attempt($credential)) {
            $entity = Auth::user();
            
            return view('pages.home')
                ->with([
                    'userType' => $entity->entity_type
                ]);
        } else
            return redirect('/login');
    }
}

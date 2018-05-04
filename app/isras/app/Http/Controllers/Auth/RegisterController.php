<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;
    
    protected $redirectTo = '/';
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function adminRegisterForm() {
        return view('pages.admin.registration');
    }

    public function userRegisterForm() {
        return view('pages.registration');
    }

    public function register(Request $request) {
        if($requets['user_type'] == 1) // admin
            $this->storeAdmin([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        else // user
            $this->storeUser([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
    }
    
    private function storeAdmin(array $data) {
        $newAdmin = Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Auth::login($newAdmin);

        return redirect()->route('/');
    }
    
    private function storeUser(array $data) {
        $newUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        Auth::login($newUser);

        return redirect()->route('/');
    }
    
    private function validateAdmin(array $data) {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    
    private function validateUser(array $data) {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}

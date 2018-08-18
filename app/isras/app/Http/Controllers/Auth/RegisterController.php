<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Company;
use App\LookupEntityType;
use App\Address;
use App\PIC;
use App\Entity;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
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
        if($request['user_type'] == 1) { // admin
            $lookupEntityType = LookupEntityType::all()->where('name', 'admin')->first();
            $newEntity = Entity::create([
                'entity_type' => $lookupEntityType->id,
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'active' => true
            ]);
            $newAdmin = Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);
        } else { // user
            $lookupEntityType = LookupEntityType::all()->where('name', 'user')->first();

            // new entity
            $newEntity = new Entity();
            $newEntity->entity_type = $lookupEntityType->id;
            $newEntity->email = $request['user_email'];
            $newEntity->password = bcrypt($request['user_password']);
            $newEntity->active = true;
            $newEntity->save();

            // new user
            $newUser = new User();
            $newUser->entity_id = $newEntity->id;
            $newUser->name = $request['user_name'];
            $newUser->tel_no = $request['user_tel_no'];
            $newUser->fax_no = $request['user_fax_no'];
            $newUser->save();

            // new company
            $newCompany = new Company();
            $newCompany->name = $request['company_name'];
            $newCompany->ref_no = $request['company_ref_no'];
            $newCompany->save();

            // new address
            $newCompanyAddress = new Address();
            $newCompanyAddress->company_id = $newCompany->id;
            $newCompanyAddress->addr_1 = $request['company_address_1'];
            $newCompanyAddress->addr_2 = $request['company_address_2'];
            $newCompanyAddress->city = $request['company_city'];
            $newCompanyAddress->postcode = $request['company_postcode'];
            $newCompanyAddress->country = $request['company_country'];
            $newCompanyAddress->save();

            // new pic
            $newPIC = new PIC();
            $newPIC->name = $request['pic_name'];
            $newPIC->email = $request['pic_email'];
            $newPIC->save();
        }

        Auth::login($newEntity);
        
        return redirect('/');
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

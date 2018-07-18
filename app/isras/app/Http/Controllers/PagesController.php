<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // neutral pages
    public function index()
    {
        if(Auth::check())
            if(Auth::user()->entity_type == 1)
                return view('pages.home')
                ->with([
                    'userType' => 1
                ]);
            else
                return view('pages.home')
                    ->with([
                        'userType' => 2
                    ]);
        
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function library()
    {
        return view('pages.library');
    }

    // admin pages
    public function adminAbout()
    {
        return view('pages.about')
            ->with([
                'userType' => 1
            ]);
    }

    // user pages
    public function userAbout()
    {
        return view('pages.about')
            ->with([
                'userType' => 2
            ]);
    }
    public function userLibrary()
    {
        return view('pages.user.library')
            ->with([
                'userType' => 2
            ]);
    }
    public function payment()
    {
        return view('pages.payment')
            ->with([
                'userType' => 2
            ]);
    }

    public function assessmentResult()
    {
        return view('pages.assessmentresult');
    }

    public function assessmentStart()
    {
        return view('pages.assessmentstart');
    }

    public function assessmentPage()
    {
        return view('pages.assessmentpage');
    }
}

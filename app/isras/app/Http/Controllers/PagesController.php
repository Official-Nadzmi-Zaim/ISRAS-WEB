<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Sort the pages according to alphabet ascending

    public function about()
    {
        return view('pages.about');
    }

    public function assessment()
    {
        return view('pages.assessment');
    }

    public function login() {
        return view('pages.login');
    }

    public function feedback()
    {
        return view('pages.feedback');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function library()
    {
        return view('pages.library');
    }

    public function payment()
    {
        return view('pages.payment');
    }

    public function registration()
    {
        return view('pages.registration');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LibraryContent;
use App\Assessment;
use App\BlogContent;

class PagesController extends Controller
{
    // neutral pages
    public function index()
    {
        $latestBlog = BlogContent::getLatestBlog();

        if(Auth::check())
        {
            if(Auth::user()->entity_type == 1)
                return view('pages.home')
                ->with([
                    'userType' => 1,
                    'blogContent' => $latestBlog
                ]);
            else
                return view('pages.home')
                    ->with([
                        'userType' => 2,
                        'blogContent' => $latestBlog
                    ]);
        }
        else
        {     
            return view('pages.home')->with([
                'userType' => null,
                'blogContent' => $latestBlog
            ]);
        }
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
        $arr_content = LibraryContent::all();

        return view('pages.user.library')
            ->with([
                'userType' => 2,
                'arr_content' => $arr_content
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
        $assessment = new Assessment();
        $assessment->clearAllCache();
        return view('pages.assessmentstart')->with('userType', 2);
    }

    public function assessmentPage()
    {
        return view('pages.assessmentpage');
    }
}

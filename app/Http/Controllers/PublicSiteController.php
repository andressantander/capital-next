<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicSiteController extends Controller
{
    public function index(): View
    {
        return view('pages.index');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function benefits(): View
    {
        return view('pages.benefits');
    }

    public function methodology(): View
    {
        return view('pages.methodology');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Page;

class HomeController extends Controller
{
    //
    public function index (): View
    {
        $pages = Page::all();
        return view('index', compact('pages'));
    }

    public function services (): View
    {
        return view('pages.services');
    }
    public function about ():View
    {
        return view('pages.about');
    }
    public function contact ():View
    {
        return view('pages.contact');
    }
}

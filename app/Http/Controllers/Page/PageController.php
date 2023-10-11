<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        return view('index');
    }
    public function services () {
        return view('pages.services');
    }
    public function about () {
        return view('pages.about');
    }
    public function contact () {
        return view('pages.contact');
    }
}

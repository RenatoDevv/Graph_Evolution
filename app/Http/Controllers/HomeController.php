<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index (): View
    {
        // Renderizando datos desde la base de datos
        $homes = Home::all();
        return view('index', compact('homes'));
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

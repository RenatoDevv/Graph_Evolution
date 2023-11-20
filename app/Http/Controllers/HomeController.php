<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Home;
use App\Models\Service;

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
        $services = Service::all();
        return view('pages.services', compact('services'));
    }
    public function about ():View
    {
        return view('pages.about');
    }
    public function contact ():View
    {
        return view('pages.contact');
    }
    public function help ():View
    {
        return view('pages.soporte');
    }
}

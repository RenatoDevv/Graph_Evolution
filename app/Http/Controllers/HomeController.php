<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Home;
use App\Models\Service;
use App\Models\Mesagge;


class HomeController extends Controller
{
    // 
    public function index (): View
    {
        // Renderizando datos desde la base de datos
        $mesagge = Mesagge::take(1)->get();
        $homes = Home::all();
        $services = Service::take(3)->get();
        return view('index', compact('homes', 'services','mesagge'));
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
    public function detail ($id){
        $service = Service::find($id);
        return view('pages.details.details', compact('service'));
    }
}

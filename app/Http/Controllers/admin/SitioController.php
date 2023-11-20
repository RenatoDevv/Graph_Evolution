<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Page;
use App\Models\Home;

class SitioController extends Controller
{
    public function index (): View
    {
        $home = Home::all();
        $pages = Page::all();
        return view('admin.pages.index', compact('home', 'pages'));
    }

    public function create (): View
    {
        return view('admin.pages.create');
    }

    public function store (Request $request) {
        $page = new Page;
        $page->name = $request->name;
        $page->description = $request->description;
        $page->save();
        return redirect()->route('admin.pages')->with('message','Guardado Satisfactoriamente !');
    }

    public function show ($id) {
        $page = Page::find($id);
        return view('admin.pages.show', compact('page'));
    }

    public function edit ($id) {
        $page = Page::find($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id) {
        $page = Page::find($id);
        $page->name = $request->name;
        $page->description = $request->description;
        $page->update($request->all());

        return redirect()->route('admin.pages');
    }

    public function delete($id) {
        $page = Page::find($id);
        $page->delete();
        return redirect()->back();
    }



    //Pagina de inicio CRUD-------------------------------------------------------------------------------------------


    public function homeIndex():View
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function homeCreate() {
        return view('admin.home.create');
    }

    public function homeStore(Request $request){
        $request->validate([
            'title' => 'required',
            'description' =>'required',
            'image_file' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);

        if ($request->hasFile('image_file')) {
            $image_file = $request->file('image_file')->store('images', 'public'); // Almacenar la imagen en el sistema de archivos

            // Guardar la ruta de la imagen en la base de datos
            $home = new Home();
            $home->title = $request->title;
            $home->description = $request->description;
            $home->image_file = $image_file;

            $home->save();
        }
        return redirect()->route('admin.home.index');
    }

    public function homeEdit($id):View
    {
        $home = Home::find($id);
        return view('admin.home.edit', compact('home'));
    }

    public function homeUpdate(Request $request, $id) {
        $home = Home::find($id);
        if ($request->hasFile('image_file')) {
            $image_file = $request->file('image_file')->store('images', 'public'); // Almacenar la imagen en el sistema de archivos

            // Guardar la ruta de la imagen en la base de datos
            $home->title = $request->title;
            $home->description = $request->description;
            $home->image_file = $image_file;

            $home->save();
        }

        return redirect()->route('admin.home.index');
    }


    //ELIMINAR ADMINISTRADOR
    public function homeDelete($id) {
        $home = Home::find($id);
        $home->delete();

        return redirect()->back();
    }



    //SERVICES CONTROLLER --------------------------------------------------------------------

    // public function servicesIndex():View {
    //     $services = Service::all();
    //     return view('admin.services.index', compact('services'));
    // }

    // public function servicesCreate():View {
    //     return view('admin.services.create');
    // }

    // public function servicesStore(Request $request) {
    //     $request->validate([
    //         'title' => 'required',
    //         'description' =>'required',
    //         'price' => 'required',
    //         'images_file' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
    //     ]);

    //     if ($request->hasFile('images_file')) {
    //         $images_file = $request->file('images_file')->store('services', 'public'); // Almacenar la imagen en el sistema de archivos

    //         // Guardar la ruta de la imagen en la base de datos
    //         $service = new Service();
    //         $service->title = $request->title;
    //         $service->description = $request->description;
    //         $service->price = $request->price;
    //         $service->images_file = $images_file;

    //         $service->save();
    //     }
    //     return redirect()->route('admin.services.index');
    // }


    // public function servicesEdit($id):View {

    //     $service = Service::find($id);
    //     return view('admin.services.edit', compact('service'));
    // }

    // public function servicesUpdate(Request $request, $id) {
    //     $service = Service::find($id);
    //     if ($request->hasFile('image_file')) {
    //         $image_file = $request->file('image_file')->store('services', 'public');
    //         $service = new Service();
    //         $service->title = $request->title;
    //         $service->description = $request->description;
    //         $service->price = $request->price;
    //         $service->image_file = $image_file;

    //          $service->save();
    //      }

    //     return redirect()->route('admin.services.index');
    // }

    // public function servicesDelete($id) {
    //     $service = Service::find($id);
    //     $service->delete();
    //     return redirect()->back();
    // }

}

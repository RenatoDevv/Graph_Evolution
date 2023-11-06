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



    //-------------------------------------------------------------------------------------------

    //IDICION DE HOME
    // public function homeIndex() {
    //     return "Hola Mundo";
    // }

    // public function homeStore(Request $request) {
    //     $home = new Home;
    //     $home->title = $request->title;
    //     $home->description = $request->description;
    //     $home->image_file = $request->image_file;
    //     $home->save();
    //     return redirect()->route('admin.users')->with('message','Guardado Satisfactoriamente !');
    // }

    public function homeIndex():View
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function homeEdit($id):View
    {
        $home = Home::find($id);
        return view('admin.home.edit', compact('home'));
    }

    public function homeUpdate(Request $request, $id) {
        $home = Home::find($id);
        $home->title = $request->title;
        $home->description = $request->description;
        $home->update($request->all());

        return redirect()->route('admin.home.index');
    }


    //ELIMINAR ADMINISTRADOR
    public function homeDelete($id) {
        $home = Home::find($id);
        $home->delete();

        return redirect()->route('admin.pages');
    }

}

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
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create (): View
    {
        return view('admin.pages.create');
    }

    public function store (Request $request) {
        $page = new Page;
        $page->title = $request->title;
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
        $page->title = $request->name;
        $page->description = $request->email;
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
    public function homeIndex() {
        return "Hola Mundo";
    }

    public function homeStore(Request $request) {
        $home = new Home;
        $home->title = $request->title;
        $home->description = $request->description;
        $home->image_file = bcrypt($request->image_file);
        $home->save();
        return redirect()->route('admin.users')->with('message','Guardado Satisfactoriamente !');
    }

    public function homeShow($id) {
        $home = Home::find($id);
        return view('admin.user.show', compact('home'));
    }

    public function homeEdit() {

        return view('admin.home.edit');
    }

    public function homeUpdate(Request $request, $id) {
        $home = Home::find($id);
        $home->title = $request->title;
        $home->description = $request->description;
        $home->image_file = $request->image_file;
        $home->update($request->all());

        return redirect()->route('admin.users');
    }


    //ELIMINAR ADMINISTRADOR
    public function homeDelete($id) {
        $user = Home::find($id);
        $user->delete();

        return redirect()->route('admin.users');
    }




}

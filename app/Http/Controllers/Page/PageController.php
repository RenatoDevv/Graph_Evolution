<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Page;

class PageController extends Controller
{
    public function index () {
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
        dd($request->all());
    }
    public function delete() {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supports = Support::all();
        return view('admin.support.index', compact('supports'));
    }

    public function create() {
        return view('admin.support.create');
    }
    public function store(Request $request)
    {
        $support = new Support();
        $support->title = $request->title;
        $support->description = $request->description;
        $support->create($request->all());
        return redirect()->route('admin.support');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $support = Support::find($id);
        return view('admin.support.show', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit($id) {
        $support = Support::find($id);
        return view('admin.support.update', compact('support'));
    }
    public function update(Request $request, string $id)
    {
        $support = Support::find($id);
        $support->title = $request->title;
        $support->description = $request->description;
        $support->update();
        return redirect()->route('admin.support');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $support = Support::find($id);
        $support->delete();
        return redirect()->back();
    }
}

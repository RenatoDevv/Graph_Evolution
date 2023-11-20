<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;



class ServiceController extends Controller
{
    public function index() {
        $services = Service::all();
        return view('admin.services.index' , compact('services'));
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'images_file' => 'image|mimes:jpg,png|max:1200',
        ]);

        if ($request->hasFile('images_file')) {
            $image_file = $request->file('images_file')->store('services', 'public');
            $service = new Service();
        }

        $service->create($request->all());

        return redirect()->route('admin.services.index');
    }

    public function  edit ($id){
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id) {

        $service = Service::find($id);
        $service->update($request->all());
        return redirect()->route('admin.services.index');
    }

    public function delete($id) {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
}



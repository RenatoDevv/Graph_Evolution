<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mesagge;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesagges = Mesagge::all();
        return view('admin.message.index', compact('mesagges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'message'=> 'required',
        ]);
        $message = new Mesagge();
        $message->create($request->all());

        return redirect()->route('admin.message')->with('message','El mensaje a sido guardado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $message = Mesagge::find($id);
        return view('admin.message.show', compact('message'));
    }

    public function edit($id) {
        $message = Mesagge::find($id);
        return  view('admin.message.edit' , compact('message'));
    }
    public function update(Request $request, string $id)
    {
        $mesagge = Mesagge::find($id);
        $mesagge->update($request->all());
        return redirect()->route('admin.message');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mesagge = Mesagge::find($id);
        $mesagge->delete();

        return redirect()->back()->with('eliminado', 'El Mensaje a sido Eliminado Correctamente');
    }
}

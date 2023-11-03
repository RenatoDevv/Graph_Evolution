<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Page;

class AdminController extends Controller
{
    public function index () {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function users() {
        $users = User::all();
        return view('admin.user.users', compact('users'));
    }

    public function create() {
        return view('admin.form.form');
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.users')->with('message','Guardado Satisfactoriamente !');
    }

    public function show($id) {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update($request->all());

        return redirect()->route('admin.users');
    }


    //ELIMINAR ADMINISTRADOR
    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users');
    }

}

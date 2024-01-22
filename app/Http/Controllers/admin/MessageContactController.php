<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MessageContact;

class MessageContactController extends Controller
{

    public function index() {
        $contacts = MessageContact::all();
        return view('admin.m-registrados.index', compact('contacts'));
    }

    public function show($id) {
        $contact = MessageContact::find($id);
        return view('admin.m-registrados.show', compact('contact'));
    }
    public  function store(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $messageCont = new MessageContact();
        $messageCont->name = $request->name;
        $messageCont->email = $request->email;
        $messageCont->message = $request->message;

        $messageCont->save();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard () {
        return view('admin.dashboard');
    }
    public function pages() {
        return view('admin.pages');
    }
    public function users() {
        return view('admin.users');
    }
    public function profile() {
        return view('admin.profile');
    }
}

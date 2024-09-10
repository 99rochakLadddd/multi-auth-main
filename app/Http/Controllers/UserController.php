<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser() {
        return view('user.user-dashboard');
    }

    public function show404error () {
        return view('user404-error');
    }
}

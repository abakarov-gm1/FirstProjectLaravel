<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTest extends Controller
{
    public function index() {
        return 'Hello from me first project';
    }

    public function profile() {
        return 'MyProfile ';
    }
}

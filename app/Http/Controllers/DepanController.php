<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function home()
    {
        return view('depan.uHome');
    }
}

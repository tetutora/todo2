<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

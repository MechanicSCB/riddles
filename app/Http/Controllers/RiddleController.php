<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiddleController extends Controller
{
    public function index()
    {
        return view('riddles.index');
    }
}

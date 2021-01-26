<?php

namespace App\Http\Controllers;

use App\Models\Riddle;
use Illuminate\Http\Request;

class RiddleController extends Controller
{
    public function index()
    {
        $riddles = Riddle::all();

        return view('riddles.index', compact('riddles'));
    }

    public function show(Riddle $riddle)
    {
        return view('riddles.show', compact('riddle'));
    }

}

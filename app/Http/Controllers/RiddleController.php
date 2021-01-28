<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiddleRequest;
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

    public function create()
    {
        return view('riddles.create');
    }

    public function store(RiddleRequest $request)
    {
        Riddle::create($request->all());

        return redirect()->route('riddles.index');
    }

    public function edit(Riddle $riddle)
    {
        return view('riddles.edit', compact('riddle'));
    }

    public function update(RiddleRequest $request, Riddle $riddle)
    {
        $riddle->update($request->all());

        return redirect()->route('riddles.index');
    }

    public function check(Request $request, Riddle $riddle)
    {
        $output = explode("\r\n",  $request['output']);

        if($output === json_decode( $riddle->output)){
            return back()->with('success', 'OK');
            dd(__METHOD__, 'OK');
        }else{
            return back()->with('danger', 'Wrong');
            dd(__METHOD__, 'WRONG');
        }
    }

}

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
        $request = $request->validated();
//        $request['input'] = json_encode([$request['input']]);
//        $request['output'] = json_encode([$request['output']]);
        Riddle::create($request);

        return redirect()->route('riddles.index')->with('success', 'Riddle Successfully Created');
    }

    public function edit(Riddle $riddle)
    {
        return view('riddles.edit', compact('riddle'));
    }

    public function update(RiddleRequest $request, Riddle $riddle)
    {
        $riddle->update($request->all());

        return back();
//        return redirect()->route('riddles.index');
    }

    public function destroy(Riddle $riddle)
    {
        $riddle->delete();

        return redirect()->route('riddles.index')->with('danger', 'Riddle Successfully Deleted');
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

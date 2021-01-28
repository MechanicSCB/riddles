@extends('my_layouts.app')

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ @endphp


    <form method="POST" action="{{ route('riddles.store') }}">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="difficulty">Difficulty: </label>
            <input type="text" name="difficulty" id="difficulty">
        </div>
        <div>
            <label for="body">Body: </label>
            <textarea name="body" id="body"></textarea>
        </div>
        <div>
            <label for="input">Input: </label>
            <input type="text" name="input" id="input">
        </div>
        <div>
            <label for="output">Output: </label>
            <input type="text" name="output" id="output">
        </div>

        <button>Save</button>
    </form>

@endsection

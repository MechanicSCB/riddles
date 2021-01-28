@extends('my_layouts.app')

@section('title', 'Edit riddle' . $riddle->title)

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ @endphp

    <form method="POST" action="{{ route('riddles.update', $riddle) }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title', $riddle->title) }}">
        </div>
        <div>
            <label for="difficulty">Difficulty: </label>
            <input type="text" name="difficulty" id="difficulty"  value="{{ old('title', $riddle->difficulty) }}">
        </div>
        <div>
            <label for="body">Body: </label>
            <textarea name="body" id="body">{{ old('title', $riddle->body) }}</textarea>
        </div>
        <div>
            <label for="input">Input: </label>
            <input type="text" name="input" id="input" value="{{ old('title', $riddle->input) }}">
        </div>
        <div>
            <label for="output">Output: </label>
            <input type="text" name="output" id="output" value="{{ old('title', $riddle->output) }}">
        </div>

        <button>Save</button>
    </form>

@endsection

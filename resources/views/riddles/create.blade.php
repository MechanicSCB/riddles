@extends('my_layouts.app')

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ @endphp

    <form method="POST" action="{{ route('riddles.store') }}">
        @csrf
        <div>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="difficulty">Difficulty: </label>
            <input type="text" name="difficulty" id="difficulty"  value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">Body: </label>
            <textarea name="body" id="body">{{ old('title') }}</textarea>
        </div>
        <div>
            <label for="input">Input: </label>
            <input type="text" name="input" id="input" value="{{ old('title') }}">
        </div>
        <div>
            <label for="output">Output: </label>
            <input type="text" name="output" id="output" value="{{ old('title') }}">
        </div>

        <button>Save</button>
    </form>

@endsection

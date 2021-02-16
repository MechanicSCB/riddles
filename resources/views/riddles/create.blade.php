@extends('my_layouts.app')

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ $riddle ??= null @endphp

    <form method="POST" action="{{ route('riddles.store') }}">
        @csrf
        <div>
            @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $riddle->difficulty ?? '' }}">
        </div>
        <div>
            @error('difficulty') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="difficulty">Difficulty: </label>
            <input type="text" name="difficulty" id="difficulty"  value="{{ old('difficulty') ?? $riddle->difficulty ?? '' }}">
        </div>
        <div>
            @error('body') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="body">Body: </label>
            <textarea name="body" id="body">{{ old('body') ?? $riddle->body ?? '' }}</textarea>
        </div>
        <div>
            @error('input') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="input">Input: </label>
            <input type="text" name="input" id="input" value="{{ old('input') ?? $riddle->input ?? '' }}">
        </div>
        <div>
            @error('output') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="output">Output: </label>
            <input type="text" name="output" id="output" value="{{ old('output') ?? $riddle->output ?? '' }}">
        </div>

        <button>Save</button>
    </form>

@endsection

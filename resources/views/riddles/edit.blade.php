@extends('my_layouts.app')

@section('title', 'Edit riddle' . $riddle->title)

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ @endphp

    <form method="POST" action="{{ route('riddles.update', $riddle) }}">
        @csrf
        @method('PATCH')
        <div>
            @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title') ?? $riddle->title }}">
        </div>
        <div>
            @error('difficulty') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="difficulty">Difficulty: </label>
            <input type="text" name="difficulty" id="difficulty"  value="{{ old('difficulty') ?? $riddle->difficulty }}">
        </div>
        <div>
            @error('body') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="editor">Body: </label>
            <textarea name="body" id="editor">{{ old('body') ?? $riddle->body }}</textarea>
        </div>
        <div>
            @error('input') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="input">Input: </label>
            <input type="text" name="input" id="input" value="{{ old('input') ?? $riddle->input }}">
        </div>
        <div>
            @error('output') <div class="alert alert-danger">{{ $message }}</div> @enderror
            <label for="output">Output: </label>
            <input type="text" name="output" id="output" value="{{ old('output') ?? $riddle->output }}">
        </div>

        <button>Save</button>
    </form>

@endsection

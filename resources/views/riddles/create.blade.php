@extends('my_layouts.app')

@section('content')
    @php /** * @var $riddle App\Models\Riddle */ @endphp

    <main>
        <div class="lg:flex -mx-3">

            <form method="POST" action="{{ route('riddles.store') }}">
                @csrf
            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" class="form-control">

            </div>



                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </main>

@endsection

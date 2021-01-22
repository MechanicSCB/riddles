@extends('layouts.master')

@section('content')
    @php /** @var  App\Models\Riddle $riddle  */ @endphp
    <div class="container">
        @forelse($riddles as $riddle)
            <div>{{ $riddle->title }}</div>
        @empty
            No Riddles.
        @endforelse
    </div>
@endsection

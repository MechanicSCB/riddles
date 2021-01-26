@extends('my_layouts.app')

@section('content')

    @php /** @var  App\Models\Riddle $riddle  */ @endphp

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h2 class="text-grey text-sm font-normal">My Riddles</h2>
            <a href="/riddle/create" class="button" @click.prevent="$modal.show('new-project')">New Riddle</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($riddles as $riddle)
            <div class="lg:w-1/3 px-3 pb-6" >
                @include('riddles.card')
            </div>
        @empty
            <div>
                No riddles yet.
            </div>
        @endforelse

{{--
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6" >
                @include('projects.card')
            </div>
        @empty
            <div>
                No projects yet.
            </div>
        @endforelse
--}}
    </main>

    <new-project-modal></new-project-modal>
@endsection

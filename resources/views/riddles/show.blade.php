@extends('my_layouts.app')

@section('content')
    @php
        /**
         * @var $riddle App\riddle
         */
    @endphp

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-default text-sm font-normal">
                <a href="/riddles" class="text-default text-sm font-normal no-underline">My riddles</a>
                / {{ $riddle->title }}
            </p>
            <!-- Invited Users -->
            <div class="flex items-center">
                <theme-switcher></theme-switcher>

            </div>

        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-default font-normal mb-3">Riddle</h2>
                    @include('riddles.card')
                </div>
                <div class="lg:flex -mx-3">
                    <div class="lg:w-1/4 px-3 mb-6">
                        <h3>input</h3>
                        @foreach(json_decode($riddle->input) as $input)
                            <p>{{ implode(', ', $input) }}</p>
                        @endforeach
                    </div>
                    <div class="lg:w-3/4 px-3 mb-6">
                        <h3>Output</h3>
                        <form method="POST" action="#">
                            @csrf
                            @method('PATCH')
                            <textarea
                                class="card w-full mb-4"
                                style="min-height: 200px"
                                placeholder="Anything special tht you want to make a note of?"
                                name="notes"
                            ></textarea>

                            <button type="submit" class="button">Save</button>
                        </form>
                    </div>

                    {{--                    @include('errors')--}}

                </div>
            </div>

            <div class="lg:w-1/4 px-3 lg:py-8">
                @include('riddles.card')
            </div>
        </div>
    </main>



@endsection

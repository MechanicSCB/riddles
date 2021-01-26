<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @php /** @var  App\Models\Riddle $riddle  */ @endphp
                    <div class="container">
                        <h3>{{ $riddle->title }}</h3>
                        <p>{{ $riddle->description }}</p>
                        <p>{{ $riddle->solution }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

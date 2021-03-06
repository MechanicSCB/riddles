<div class="card flex flex-col"
    {{--     style="height: 200px" --}}
>
    <div class="rounded-full" style="background-color: green; color: white; width: 30px; padding: 5px; text-align: center; font-weight: bold" >{{ $riddle->difficulty }}</div>
    <h3 class="flex font-normal text-xl py-4 border-l-4 border-blue pl-4 -ml-5 mb-3">
        <a href="{{ route('riddles.show', [$riddle->id]) }}" class="text-default no-underline">{{ $riddle->title }}</a>
    </h3>

    @php $limit ??= true @endphp
    <div
        class="text-default mb-4 flex-1">{!! $limit === true ?  Str::limit($riddle->body, 250) : $riddle->body  !!}</div>
    @can('manage', $riddle)
        <footer>
            <form action="{{ route('riddles.show', [$riddle->id]) }}" method="POST" class="text-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm">Delete</button>
            </form>
        </footer>
    @endcan
</div>


@extends('layouts.app')
@section('content')
<br><br>
<div class="flex flex-wrap items-center text-center justify-center">
    @if($members->isNotEmpty())
    @foreach ($members as $member)
    <div class="p-4 flex w-3/4 sm:w-2/4 md:w-2/4 lg:w-1/3 xl:w-1/4 w-64 px-2" style="height:512px ; : auto; overflow-x: hidden; overflow: auto; ">
        <div class="max-w-sm rounded overflow-hidden shadow-lg " style="
    overflow-y: auto;">
            <img class="rounded-full mx-auto w-64 h-64" src="{{ $member->picture }}" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $member->name }}</div>
                <div class="font-bold text-xl text-purple-600 mb-1">{{ $member->position }}</div>
                <p class="text-gray-700 text-base">
                    {{ $member->quote }}
                </p>
            </div>
            <div class="px-6 py-4">
                @foreach ($member->links as $key => $value)   
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-3"><a href="{{ $value }}">#{{ $key }}</a></span>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
    @else 
     <p class="text-gray-400">No member has been uploaded</p>
    @endif
</div>
@endsection

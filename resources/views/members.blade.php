@extends('layouts.app')
@section('content')
@if($members->isNotEmpty())
<ul>
    <br>
    @foreach ($members as $member)
    <li>{{ $member->name }}</li>
    <li>{{ $member->picture }}</li>
    <li>{{ $member->position }}</li>
    <li>{{ $member->quote }}</li>

    @foreach ($member->links as $key => $value)   
    <a href="{{ $value }}" >{{ $key }}</a>
    @endforeach

    @endforeach
</ul>
@endif
@endsection

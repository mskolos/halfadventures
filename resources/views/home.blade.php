@extends('app')
@section('content')
    <div class="title m-b-md">
        <u>Characters</u>
    </div>
    @foreach(auth()->user()->characters as $character)
        <li style="font-size: 22px"><a href="/characters/{{ $character->id }}">{{ $character->name }}</a></li>
    @endforeach
@endsection

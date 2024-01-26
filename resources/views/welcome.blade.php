@extends('layouts.app')

@section('main')
    <ul>
        @foreach ($fumetti as $fumetto)
            <li> {{ $fumetto['title'] }} </li>
        @endforeach
    </ul>
@endsection

@extends('layout')



@section('content')

    <h1>My First Website</h1>

    @foreach($tasks as $task)

    <li>{{ $task }}</li>

    @endforeach

@endsection
@extends('layout.main')
@section('title', 'AJUDAI')
@section('content')
    @foreach ($events as $event)
        <p> {{ $event->title }} -- {{ $event->description }}</p>
    @endforeach
@endsection

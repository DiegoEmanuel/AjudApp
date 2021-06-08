@extends('layout.main')
@section('title','Doacoes')
@section('content')

    @if ($busca != '')
        <p>O produto é {{ $busca }}</p>

    @endif

<h1>Paginas de produtos</h1>

@endsection

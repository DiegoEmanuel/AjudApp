@extends('layout.main')
@section('title', 'AJUDAI')
@section('content')

    <h1> Alguma coisa </h1>
    <img src="/images/logoajudai.png" alt="banner" />
    @if (10 > 9)
        <p>A condição é true</p>

    @endif
    <p>O nome é {{ $nome }}

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }} </p>
        @endfor

    @endsection

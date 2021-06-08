@extends('layout.main')
@section('title', 'AJUDAI')
@section('content')

    <h1> Seja bem vindo </h1>
    <img src="/images/banner.png" alt="banner"  class="banner" width="1500"/>
    @if (10 > 9)
        <p>A condição é true</p>

    @endif
    <p>O nome é {{ $nome }}

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }} </p>
        @endfor

    @endsection

@extends('layout.main')
@section('title', 'AJUDAI')
@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Procurar doação</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">

        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subititle">Veja os eventos dos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/image/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events)==0)
                <p>Ainda nao temos nenhum evento</p>
            @endif
        </div>
    </div>
@endsection

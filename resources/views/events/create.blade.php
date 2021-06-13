@extends('layout.main')
@section('title','Doacoes')
@section('content')

<div id="event-create-container" class="col-md-5 offset md-3">
    <h1>Crie a sua doação</h1>
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title"></label>
            <input type="text"class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="Cidade"></label>
            <input type="text"class="form-control" id="city" name="city" placeholder="Local">
        </div>
        <div class="form-group">
            <label for="O evento é privado ?"></label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Descrição"></label>
            <textarea name="description" placeholder="O evento será" id="description" class="form-control"></textarea>
        </div>

    </form>
    <input type="submit" class="btn btm-primary" value="criar evento">
</div>

@endsection

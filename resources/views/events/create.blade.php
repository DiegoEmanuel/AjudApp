@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Transforme a vida de alguém por aqui</h1>
        <p></p>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group">
                <label for="image">Suba sua imagem :</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div> --}}
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento</label >
                <input type="date" class="form-control" id="date" name="date"required>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" required name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label >
                <textarea name="description" id="description" class="form-control"
                    placeholder="O que vai acontecer no evento?" required></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Macarrão"> Macarrao
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Arroz"> Arroz
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Oleo"> Oleo
                </div>
                <div class="form-group">


                    <input type="checkbox" name="itens[]" value=""> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection

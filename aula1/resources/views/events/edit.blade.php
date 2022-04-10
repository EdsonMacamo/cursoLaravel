@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)
@section('content',)
      <div id="event-create-container" class="col-md-6 offset-md-3">
      <h1>Editando: {{ $event->title }}</h1>
      <form action="/events/update/{{ $event->id }}"method="POST"  enctype="multipart/form-data">
            
      @csrf
    @method('PUT')
            <div class="form-group">
              <label for="image">Imagem do eventoEvento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
           </div>
        <div class="form-group">
              <label for="title">Evento:</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Nome do evento" value="{{ $event->title }}">
        </div>
        <div class="form-group">
              <label for="title">Data do Evento:</label>
              <input type="date" name="date" class="form-control" id="date" value="{{ $event->date->format('Y-m-d')}}" >
        </div>
        <div class="form-group">
              <label for="date">Cidade:</label>
              <input type="text" name="city" class="form-control" id="title" placeholder="Local do evento" value="{{ $event->city }}">
        </div>
        <div class="form-group">
              <label for="title">O evento e privado?</label>
              <select name="private" id="private" class="form-control">
                    <option value="0">Nao</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}} class="">Sim</option>

              </select>
        </div>
        <div class="form-group">
              <label for="title">Descricao:</label>
             <textarea name="description" id="description"  class="form-control" placeholder="Oque vai acontecer no evento">{{ $event->description}}</textarea>
        </div>
        <div class="form-group">
              <label for="title">Adicione items de infraestrutura:</label>
              <div class="from-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
              </div>
              <div class="from-group">
                    <input type="checkbox" name="items[]" value="Palco">Palco
              </div>
              <div class="from-group">
                    <input type="checkbox" name="items[]" value="Cerveja gratis">Cerveja gratis
              </div>
              <div class="from-group">
                    <input type="checkbox" name="items[]" value="Open Food">Open Food
              </div>
              <div class="from-group">
                    <input type="checkbox" name="items[]" value="Brindes">Brindes
              </div>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Editar Evento">
      </form>
      </div>
     
@endsection
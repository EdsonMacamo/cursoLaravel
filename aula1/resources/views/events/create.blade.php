@extends('layouts.main')

@section('title', 'Criar Evento')
@section('content',)
      <div id="event-create-container" class="col-md-6 offset-md-3">
      <h1>Crie o seu evento</h1>
      <form action="/events" method="POST" enctype="multipart/form-data">
            
            @csrf
            <div class="form-group">
              <label for="image">Imagem do eventoEvento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
           </div>
        <div class="form-group">
              <label for="title">Evento:</label>
              <input type="text" name="title" class="form-control" id="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
              <label for="title">Data do Evento:</label>
              <input type="date" name="date" class="form-control" id="date" >
        </div>
        <div class="form-group">
              <label for="date">Cidade:</label>
              <input type="text" name="city" class="form-control" id="title" placeholder="Local do evento">
        </div>
        <div class="form-group">
              <label for="title">O evento e privado?</label>
              <select name="private" id="private" class="form-control">
                    <option value="0">Nao</option>
                    <option value="1" class="">Sim</option>

              </select>
        </div>
        <div class="form-group">
              <label for="title">Descricao:</label>
             <textarea name="description" id="description"  class="form-control" placeholder="Oque vai acontecer no evento"></textarea>
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
        
        <input type="submit" class="btn btn-primary" value="Criar Evento">
      </form>
      </div>
     
@endsection
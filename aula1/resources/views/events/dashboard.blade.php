@extends('layouts.main')

@section('title', 'Dashboard')
@section('content',)

 <div class="col-md-10 offset-md-1 dashboard-title-container">
     <h1>Meus Eventos</h1>
 </div>
 <div class="col-md-10 offset-md-1 dashboard-events-container">
     @if(count($events) > 0)
     <table class="table">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nome</th>
                 <th scope="col">Participantes</th>
                 <th scope="col">Acoes</th>
            </tr>
         </thead>
   
     <tbody>
         @foreach($events as $event)
          <tr>
              <td scope="row">{{ $loop->index +1 }}</td>
                <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                <td>{{ count($event->users) }}</td>
                <td>
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                    <form action="/events/{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                </td>
          </tr>
         @endforeach
     </tbody>
     </table>
     @else
     <p>Voce ainda nao tem eventos, <a href="/events/create">Criar evento</a></P>
     @endif
 </div>
 <div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($eventsAsParticipant)> 0 )</label>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Acoes</th>
           </tr>
        </thead>
  
    <tbody>
        @foreach($eventsAsParticipant as $event)
         <tr>
             <td scope="row">{{ $loop->index +1 }}</td>
               <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
               <td>{{ count($event->users) }}</td>
               <td>
               <form action="/events/leave/{{ $event->id }}" method="POST">
                 @csrf
                 @method("DELETE")
                 <button type="submit" class="btn btn-danger delete-btn">
                     <ion-icon name="trash-outline"></ion-icon>Sair do Evento
                 </button>
               </form>
               </td>
         </tr>
        @endforeach
    </tbody>
    </table>
    @else
    <p>Voce ainda nao esta participando de nenhum evento, <a href="/">Veja todos os eventos</a></p>
    @endif
</div>
@endsection
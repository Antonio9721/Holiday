@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Detalles del Hotel')
@section('content')

<center>
  <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Detalles de la Reservación</h4></div>
  </center>


<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('hotels.index') }}">Volver al Registro</a></div>
</div>
<br>

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/e9/7a/cc/hotel-santa-fe.jpg?w=600&h=300&s=1" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $hotel->nombre }}</b></h5>
        <p class="card-text"><b>Tipo de Habitación:</b> {{ $hotel->habitacion }} <b>No. Habitación:</b> {{ $hotel->nhabitacion }}</p>
            <p class="card-text"><b>Tiempo de Estadia:</b> {{ $hotel->tiempo }} <b> Precio: </b> {{ $hotel->precio }}</p>
            <p class="card-text"><b>Fecha de Reservación: </b> {{ $hotel->fecha }} <b>Hora de Reservación: </b> {{ $hotel->hora }}</p>
            <p class="card-text"><b>Número de Huespedes: </b> {{ $hotel->npersonas }} <b>Númro Teléfonico: </b> {{ $hotel->telefono }}</p>
        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="post">
      <a type="submit" class="btn btn-primary" href="{{ route('hotels.edit', $hotel->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>

@endsection
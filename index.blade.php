@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Restaurantes')
@section('content')

<center>
  <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Restaurantes</h4></div>
  </center>
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('restaurantes.create') }}">Agendar Reservación</a></div>
</div>
<br>

@forelse($restaurantes as $restaurante)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://s3-us-west-1.amazonaws.com/tipsparatuviaje/wp-content/uploads/2017/01/15.-%C2%BFCu%C3%A1les-son-los-mejores-restaurantes.jpg" width="336" height="325">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $restaurante->nombre }} </b></h5>
        <p class="card-text"><b>Mesa: </b>{{ $restaurante->tmesa }}</p>
            <p class="card-text"><b> Número de Mesa:</b> {{ $restaurante->nmesa }}</p>
            <p class="card-text"><b>Platillo:</b> {{ $restaurante->platillo }} <b>Precio :</b> {{ $restaurante->precio }}</p>
            <p class="card-text"><b>Fecha de Reservación:</b> {{ $restaurante->fecha }} <b> Hora de Reservación :</b> {{ $restaurante->hora }}</p>
            <p class="card-text"><b>Teléfono del Cliente:</b> {{ $restaurante->telefono }}</p>
        <form action="{{ route('restaurantes.destroy', $restaurante->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('restaurantes.show', $restaurante->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('restaurantes.edit', $restaurante->id) }}">Editar</a>
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </form> 
      </div>
    </div>
  </div>
</div>
</center>


<br>

@empty
<div><h3>No hay reservaciones registradas en la base de datos</h3></div>
@endforelse

<center>
{{$restaurantes->links() }}
</center>

@endsection
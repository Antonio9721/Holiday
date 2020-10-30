@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Detalles del Registro')
@section('content')

<center>
  <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Detalles del Registro</h4></div>
  </center>


<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('turistas.index') }}">Volver al Registro</a></div>
</div>
<br>

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://i.pinimg.com/originals/4d/5c/4f/4d5c4fb482387442b092e4ae54ef4a36.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $turista->nombre }} {{ $turista->apellidop }} {{ $turista->apellidom }}</b></h5>
        <p class="card-text"><b>Estado: </b> {{ $turista->estado }} <b>Municipio:</b> {{ $turista->municipio }}</p>
            <p class="card-text"><b>Edad:</b> {{ $turista->edad }}</p>
            <p class="card-text"><b>Número Teléfonico:</b> {{ $turista->telefono }} </p>
            <p class="card-text"><b>Correo Electrónico:</b> {{ $turista->correo }}</p>
        <form action="{{ route('turistas.destroy', $turista->id) }}" method="post">
      <a type="submit" class="btn btn-primary" href="{{ route('turistas.edit', $turista->id) }}">Editar</a>
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
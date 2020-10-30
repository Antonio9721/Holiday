@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Destinos')
@section('content')

<center>
  <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Atractivos Turísticos</h4></div>
  </center>
<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('destinos.create') }}">Agregar Destino</a></div>
</div>
<br>

@forelse($destinos as $destino)

<center>
  <div class="card mb-3"  style="max-width: 1020px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.corazondepuebla.com.mx/wp-content/uploads/2018/10/tlatauquitetpec-pueblo-magico-pueblam-exico-06.jpg" width="336" height="286">
    </div>
    <div class="col-md-8 ">
      <div class="card-body bg-dark text-white text-center">
        <h5 class="card-header bg-info text-center"><b>{{ $destino->nombre }}</b></h5>
        <p class="card-text"><b>Comunidad: </b>{{ $destino->comunidad }}</p>
            <p class="card-text"> <b> Número de Visitantes:</b> {{ $destino->visitantes }}</p>
            <p class="card-text"><b>Fecha de la Visita:</b> {{ $destino->fecha }} <b> Hora de la Visita:</b> {{ $destino->tiempo }}</p>
            <p class="card-text"><b> Hora de la Visita:</b> {{ $destino->tiempo }}</p>
        <form action="{{ route('destinos.destroy', $destino->id) }}" method="post">
      <a type="submit" class="btn btn-success" href="{{ route('destinos.show', $destino->id) }}">Ver</a>
      <a type="submit" class="btn btn-primary" href="{{ route('destinos.edit', $destino->id) }}">Editar</a>
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
<div><h3>No hay destinos registrados en la base de datos</h3></div>
@endforelse

<center>
{{$destinos->links() }}
</center>

@endsection
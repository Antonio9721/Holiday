@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Editar Atractivo')
@section('content')

<center>
   <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Editar Registro</h4></div>
  </center>


<div class="row">
	<div class="col-sn-2">
	    <a href="{{ route('destinos.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('destinos.update', $destino->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Atractivo Turístico:</label>
		<select class="form-control" name="nombre" id="" required>
		  <option value="{{$destino->nombre }}">Seleccione un atractivo</option>
		  <option value="Exconvento de Santa Mería de la Asunción">Exconvento de Santa Mería de la Asunción</option>
		  <option value="Plaza Principal">Plaza Principal</option>
		  <option value="Cerro Cabezón">Cerro Cabezón</option>
		  <option value="Iglesia del Sagrado Corazón de Jesús">Iglesia del Sagrado Corazón de Jesús</option>
		  <option value="Santuario del Señor de Huaxtla​a">Santuario del Señor de Huaxtla​</option>
		  <option value="Presa de la soledad">Presa de la soledad</option>
		  <option value="Cascada de Puxtla">Cascada de Puxtla</option>
		  <option value="Cascada de Tenazate">Cascada de Tenazate</option>
		  <option value="Manantiales de Xiliaco">Manantiales de Xiliaco</option>
		  <option value="Cultivo de orquídeas">Cultivo de orquídeas</option>
		</select>
	</div>
	<br>

	<div>
		<label for="">Ubicación del Atractivo:</label>
		<input class="form-control" type="text" value="{{$destino->comunidad }}" name="comunidad" id="" required maxlength="25">
	</div>
	<br>


	<div>
		<label for="">Número de Visitantes:</label>
		<input class="form-control"  type="int" value="{{$destino->visitantes }}" name="visitantes" id="" required maxlength="15">
	</div>
	<br>


	<div>
		<label for="">Fecha de la Visita:</label>
		<input class="form-control" type="date" value="{{$destino->fecha }}" name="fecha" id="" required maxlength="">
	</div>
<br>

    <div>
		<label for="">Hora de la Visita:</label>
		<input class="form-control" type="time" value="{{$destino->tiempo }}" name="tiempo" id="" required maxlength="">
	</div>
<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection
@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Editar Registro')
@section('content')

<center>
   <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Editar Registro</h4></div>
  </center>


<div class="row">
	<div class="col-sn-2">
	    <a href="{{ route('turistas.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('turistas.update', $turista->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre:</label>
		<input class="form-control" type="text" value="{{$turista->nombre }}" name="nombre" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Apellido Paterno:</label>
		<input class="form-control" type="text" value="{{$turista->apellidop }}" name="apellidop" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Apellido Materno:</label>
		<input class="form-control" type="text" value="{{$turista->apellidom }}" name="apellidom" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Estado Federativo:</label>
		<input class="form-control" type="text" value="{{$turista->estado }}" name="estado" id="" required maxlength="20">
	</div>
	<br>

	<div>
		<label for="">Municipio:</label>
		<input class="form-control" type="text" value="{{$turista->municipio }}" name="municipio" id="" required maxlength="25">
	</div>
	<br>

	<div>
		<label for="">Edad:</label>
		<input class="form-control" type="int" value="{{$turista->edad }}" name="edad" id="" required maxlength="3">
	</div>
	<br>

	<div>
		<label for="">Número Teléfonico:</label>
		<input class="form-control" type="int" value="{{$turista->telefono}}" name="telefono" id="" required maxlength="12">
	</div>
	<br>


	<div>
		<label for="">Correo Electrónico:</label>
		<input class="form-control"  type="int" value="{{$turista->correo }}" name="turista" id="" required maxlength="25">
	</div>
	<br>

	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection
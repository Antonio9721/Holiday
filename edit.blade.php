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
	    <a href="{{ route('restaurantes.index') }}">
	      <button class="btn btn-danger">Cancelar Edición</button>
	  </a></div>
</div>
<br>


<div class="jumbotron">
<form method="post" action="{{ route('restaurantes.update', $restaurante->id) }}">
	@csrf
	@method('PUT')

	<div>
		<label for="">Nombre del Restaurante:</label>
		<select class="form-control" name="nombre" id="" required>
		  <option value="{{$restaurante->nombre }}"> --Seleccione un atractivo-- </option>
		  <option value="TERRA RESTAURANT">TERRA RESTAURANT</option>
          <option value="Mamma Mia">Mamma Mia</option>
          <option value="El Mural">El Mural</option>
          <option value="El Zarzo Resturant Bar">El Zarzo Resturant Bar</option>
          <option value="Chipi Chipi Café">Chipi Chipi Café</option>
          <option value="La Taberna">La Taberna</option>
          <option value="Hotel Plaza Restaurante">Hotel Plaza Restaurante</option>
          <option value="Urucú">Urucú</option>
          <option value="El Balcon">El Balcon</option>
          <option value="Café Colonial">Café Colonial</option>
		</select>
	</div>
	<br>

	<div>
		<label for="">Tipo de Mesa:</label>
		<input class="form-control" type="text" value="{{$restaurante->tmesa }}" name="tmesa" id="" required maxlength="20">
	</div>
	<br>


	<div>
		<label for="">Número de la Mesa:</label>
		<input class="form-control"  type="int" value="{{$restaurante->nmesa }}" name="nmesa" id="" required maxlength="3">
	</div>
	<br>

	<div>
		<label for="">Platillo Solicitado:</label>
		<input class="form-control"  type="text" value="{{$restaurante->platillo }}" name="platillo" id="" required maxlength="45">
	</div>
	<br>

	<div>
		<label for="">Precio:</label>
		<input class="form-control"  type="text" value="{{$restaurante->precio }}" name="precio" id="" required maxlength="18">
	</div>
	<br>


	<div>
		<label for="">Fecha de Reservación:</label>
		<input class="form-control" type="date" value="{{$restaurante->fecha }}" name="restaurante" id="" required maxlength="">
	</div>
<br>

    <div>
		<label for="">Hora de Reservación:</label>
		<input class="form-control" type="time" value="{{$restaurante->hora }}" name="hora" id="" required maxlength="">
	</div>
<br>
	<input class="btn btn-primary" type="submit" value="Guardar Cambios">
	
</form>
</div>

@endsection
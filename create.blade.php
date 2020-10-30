@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Turista')

@section('content')

<center>
   <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Registrar Nuevo Turista</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('turistas.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('turistas.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre:</label>
    <input class="form-control" type="text" name="nombre" id="" required maxlength="25">
  </div>
  <br>


  <div>
    <label for="">Apellido Paterno:</label>
    <input class="form-control"  type="text" name="apellidop" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Apellido Materno:</label>
    <input class="form-control"  type="text" name="apellidom" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Estado Federativo:</label>
    <input class="form-control"  type="text" name="estado" id="" required maxlength="20">
  </div>
  <br>

   <div>
    <label for="">Municipio:</label>
    <input class="form-control"  type="text" name="municipio" id="" required maxlength="30">
  </div>
  <br>

  <div>
    <label for="">Edad:</label>
    <input class="form-control"  type="int" name="edad" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Número Teléfonico:</label>
    <input class="form-control"  type="int" name="telefono" id="" required maxlength="12">
  </div>
  <br>

  <div>
    <label for="">Correo Electrónico:</label>
    <input class="form-control"  type="email" name="correo" id="" required maxlength="25">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection
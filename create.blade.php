@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Reservación')

@section('content')

<center>
   <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Registrar Reservación</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('hotels.index') }}">
        <button class="btn btn-danger">Cancelar Reservación</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('hotels.store') }}">
  @csrf
  
  <div>
    <label for="">Nombre del Hotel:</label>
    <select class="form-control" name="nombre" id="" required>
      <option value="">--Seleccione un hotel--</option>
      <option value="Hotel Santa Fe">Hotel Santa Fe</option>
      <option value="Hotel San Jorge">Hotel San Jorge</option>
      <option value="JH Hotel Tlatlauquitepec">JH Hotel Tlatlauquitepec</option>
      <option value="Hotel Suites Tlatlauquitepec">Hotel Suites Tlatlauquitepec</option>
      <option value="Hotel Plaza Gloria">Hotel Plaza Gloria</option>
      <option value="Hotel Posada Serrana">Hotel Posada Serrana</option>
      <option value="Hostal Tlatlauquitepec">Hostal Tlatlauquitepec</option>
      <option value="Casa Afif">Casa Afif</option>
    </select>
  </div>
  <br>


  <div>
    <label for="">Tipo de Habitación:</label>
    <input class="form-control"  type="text" name="habitacion" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Número de la Habitación:</label>
    <input class="form-control"  type="int" name="nhabitacion" id="" required maxlength="3">
  </div>
  <br>

  <div>
    <label for="">Tiempo de Estadia:</label>
    <input class="form-control"  type="text" name="tiempo" id="" required maxlength="20">
  </div>
  <br>

  <div>
    <label for="">Precio de la Reservación:</label>
    <input class="form-control"  type="text" name="precio" id="" required maxlength="16">
  </div>
  <br>


  <div>
    <label for="">Fecha de la Reservación:</label>
    <input class="form-control"  type="date" name="fecha" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Hora de la Reservación:</label>
    <input class="form-control"  type="time" name="hora" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Número de Huespedes:</label>
    <input class="form-control"  type="int" name="npersonas" id="" required maxlength="3">
  </div>
  <br>

  <div>
    <label for="">Número Teléfonico:</label>
    <input class="form-control"  type="int" name="telefono" id="" required maxlength="12">
  </div>
  <br>

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection
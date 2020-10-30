@extends('layout.layout')
@extends('layout.nav')
@section('title', 'Registrar Destino')

@section('content')

<center>
   <div class="col-sn-10"><h3>Tlatlauquitepec Pueblo Mágico</h3></div>
  <div class="col-sn-10"><h4>Registrar Destino Turístico</h4></div>
  </center>

<div class="row">
  <div class="col-sn-2">
      <a href="{{ route('destinos.index') }}">
        <button class="btn btn-danger">Cancelar Registro</button>
    </a></div>
  
</div>
<br>
<div class="jumbotron">
<form method="post" action="{{ route('destinos.store') }}">
  @csrf
  
  <div>
    <label for="">Atractivo Turístico:</label>
    <select class="form-control" name="nombre" id="" required>
      <option value="">Seleccione un atractivo</option>
      <option value="Exconvento de Santa Mería de la Asunción">Exconvento de Santa Mería
       de la Asunción</option>
      <option value="Plaza Principal">Plaza Principal</option>
      <option value="Cerro Cabezón">Cerro Cabezón</option>
      <option value="Iglesia del Sagrado Corazón de Jesús">Iglesia del Sagrado Corazón de Jesús</option>
      <option value="Santuario del Señor de Huaxtla​">Santuario del Señor de Huaxtla​</option>
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
    <input class="form-control" type="text" name="comunidad" id="" required maxlength="25">
  </div>
  <br>


  <div>
    <label for="">Número de Visitantes:</label>
    <input class="form-control"  type="int" name="visitantes" id="" required maxlength="5">
  </div>
  <br>

  <div>
    <label for="">Fecha de la Visita:</label>
    <input class="form-control"  type="date" name="fecha" id="" required maxlength="">
  </div>
  <br>

  <div>
    <label for="">Hora de la Visita:</label>
    <input class="form-control"  type="time" name="tiempo" id="" required maxlength="">
  </div>
  <br>

  

  <input class="btn btn-primary" type="submit" value="Guardar Registro">
  
</form>
</div>

@endsection
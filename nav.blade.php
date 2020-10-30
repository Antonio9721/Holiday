<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>             
  <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="">TLATLAUQUITEPEC</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>

        <div style="width: 180px;">
          <img src="https://ayuntamientotlatlauquitepec.gob.mx/images/logo.png" width="135" height="40" alt="Logo Cobaep">
        </div>


  <a class="navbar-brand" href="http://localhost:8084/Plantel"> <font style = "vertical-align: heredar;">
   <font style = "vertical-align: heredar;"> Página Principal </font> </fuente> </a>
  <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "# navbarColor02" aria-controls = "navbarColor02"
   aria-extended = "false" aria-label = "Navegación de palanca ">
    <span class = "navbar-toggler-icon"> </span>
  </button>

  <div class = "collapse navbar-collapse" id = "navbarColor02">
    <ul class = "navbar-nav mr-auto">
      <li class = "nav-item active">
        <a class="nav-link" href=""> <font style = "vertical-align: heredar;">
         <font style = "vertical-align: heredar;"> Inicio </font> </font> <span class = "sr-only"> <font style = "vertical-align: heredar;"> 
           <font style = "vertical-align: heredar;"> (real) </font> </font> </span > </a>
      </li>
      <li class = "nav-item">
        <a class="nav-link" href="{{ route('destinos.index') }}"> 
        <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">Atractivos Turisticos </font> </font> </a>
      </li>
      <li class = "nav-item">
        <a class="nav-link" href="{{ route('turistas.index') }}"> 
        <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">Turistas </font> </font> </a>
      </li>
      <li class = "nav-item">
        <a class="nav-link" href="{{ route('hotels.index') }}">
         <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">Hoteles</font> </ font > </a>
      </li>
      <li class = "nav-item">
        <a class="nav-link" href="{{ route('restaurantes.index') }}">
         <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">Restaurantes</font> </ font > </a>
      </li>
        
    </ul>
    
  </div>
</nav>
</body>
</html>
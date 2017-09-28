
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/contact.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@include('navbar')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/2-1.jpg" alt="Cancha5">
        <div class="carousel-caption">
          <h1>Canchas de Fútbol N° 5</h1>
          <h3>Cubiertas y Descubiertas</h3>
        </div>      
      </div>

      <div class="item">
        <img src="images/1-1.jpg" alt="Cancha7">
        <div class="carousel-caption">
          <h1>Canchas de Futbol N° 7 y 9</h1>
          <h3>Cesped Sintético</h3>
        </div>      
      </div>
    
      <div class="item">
        <img src="images/3-1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h1>Competencias</h1>
          <h3>Torneos Sabados y Domingos</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h4>Da Vinci Fútbol</h4>
  <p>Hay quienes sostienen que el fútbol no tiene nada que ver con la vida del hombre, con sus cosas más esenciales; desconozco cuánto sabe la gente de la vida, pero de algo estoy seguro: no saben nada de fútbol.</p>
  <div class="row">
    <div class="col-sm-4">
      <h3 class="titulo" class="text-center">Canchas Cubiertas</h3>
      <a href="#demo" data-toggle="collapse">
        <img src="images/Cubierta.jpg" class="img-circle" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <h3 class="titulo" class="text-center">Canchas Descubiertas</h3>
      <a href="#demo2" data-toggle="collapse">
        <img src="images/Descubierta.jpg" class="img-circle" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <h3 class="titulo" class="text-center">Cesped Sintético</h3>
      <a href="#demo3" data-toggle="collapse">
        <img src="images/1.jpg" class="img-circle" alt="Random Name" width="255" height="255">
    </div>
  </div>
</div>

@include('auth.login')
@include('auth.register')
@include('modalContact')


<!-- Add Google Maps -->
<div id="googleMap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.9852588371605!2d-58.3980406851489!3d-34.60453426504756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaea679f7673%3A0x91d6f7af3c33a407!2sAv.+Corrientes+2028%2C+C1045AAP+CABA!5e0!3m2!1ses-419!2sar!4v1506184669757" allowfullscreen></iframe>
</div>
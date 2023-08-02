<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0nZs21FclV9hbuRl4UJj1FR-ojC2WOSw&libraries=places&callback=initMap">
 	    </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url(); ?>/welcome">
       <img src="https://res.cloudinary.com/black-royal/image/upload/v1690948572/pngwing.com_f2tmzy.png" alt="Bootstrap" alt="logo" width="200px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url(); ?>/welcome">INICIO</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REGISTRO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url(); ?>/artistas/nuevo">REGISTRO</a>
          <a class="dropdown-item" href="<?php echo site_url(); ?>/artistas/index">LISTADO</a>
          
      </li>
  
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo site_url(); ?>/generos/rock">ROCK</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo site_url(); ?>/generos/pop">POP</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo site_url(); ?>/generos/reggaeton">REGGAETON</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo site_url(); ?>/generos/baladas">BALADAS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="<?php echo site_url(); ?>/generos/unifi">UNIFICADO</a>
      </li>
    </ul>
   
  </div>
</nav>
</body>
</html>
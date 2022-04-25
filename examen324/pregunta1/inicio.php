<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
	
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body>
	<?php 
  session_start();
  
  if (!isset($_SESSION['usuario'])) {
    header("Location:login1.php");
  }
  
  ?>

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="logo.png" alt="" width="70" height="70" class="d-inline-block align-text-top">
    
    </a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href="http://cmat.umsa.bo/">Carrera de Matematicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.informatica.edu.bo/">Carrera de Informatica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="https://estadistica.umsa.bo/">Carrera de Estadistica</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="finsesion.php">  Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
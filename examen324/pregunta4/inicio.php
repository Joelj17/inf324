<!doctype html>
<?php require("usuario.php");?>
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

    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">INICIO</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link " href="finsesion.php">  Cerrar Sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>cod dep</th>
                        <th>promedio</th>
                        
                       
                      

                    </tr>
                 </thead>
                <tbody>
                    <?php 
                    
                    $us=new Usuario();
                    $res=$us->obtenerNotasTotal();
                    foreach($res as $row){?>

                 
                        <tr>
                            <td><?php echo $row['COD_DEP']?></td>
                            <td><?php echo $row['prom']?></td>
                           
                           

                        </tr>
                         

                    <?php }
                    
                    ?>

                 </tbody>

            </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
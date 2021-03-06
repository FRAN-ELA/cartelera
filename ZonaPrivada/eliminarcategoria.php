<?php
session_start();
if(!isset($_SESSION['user'])) header("Location: login.php");
require ("funciones.php");
if(isset($_GET["id"])){
  $eliminacategoria = eliminacategoria($_GET["id"]);
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Zona Privada</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />


</head>
  <body>
    <header>
      <div class="jumbotron jumbotron-fluid bg-info ">

            <div class="float-none">
              <div class="container">
        <h1 class="display-3">Zona Privada</h1>
      </div>
          </div>

      <div class="container">
          <p class="lead">Bienvenido <?php echo $_SESSION['user']; ?> </p>
        <img src="img/user.png" width="100" height="100" alt="foto usuario">

        <a href="index.php"><img src="img/exit.png" width="30" height="30" alt="foto usuario" ></a>


</div>
      </div>
    </div>
      <div class="clear"></div>
    </header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="privada.php">Panel de Control</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="crearcategoria.php"><i class="glyphicon glyphicon-plus"></i> Crear nueva categoria</a></li>
                <li><a href="eliminarcategoria.php"><i class="glyphicon glyphicon-trash"></i> Eliminar categoria</a></li>
                <li><a href="creararticulo.php"><i class="glyphicon glyphicon-plus"></i> Crear Artículos</a></li>
                <li><a href="eliminararticulo.php"><i class="glyphicon glyphicon-trash"></i> Eliminar Artículos</a></li>
                <li><a href="editarpelicula.php"><i class="glyphicon glyphicon-pencil"></i> Modificar Artículos</a></li>
              </ul>
            </li>
          </ul>

  </div>
  </div>

  </nav>
    <main>
<div class="container">
  <h1 class="bg-primary">Eliminar Categoría</h1>
  <p class="lead">Las categorias eliminadas no se podrán recuperar!.</p>
<?php
tablaEliminarCategoria();

               if (isset($eliminacategoria) && $eliminacategoria== false){
                 echo '<span>
                 <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <p class="bg-success">La categoria'.$eliminacategoria['nombre'].' ha sido eliminada </p>
                 </span>';

               }elseif(isset($eliminacategoria) && $eliminacategoria==true){
                 echo '<span>
                 <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <p class="bg-danger">La categoría seleccionada no ha sido eliminada</p>
                 </span>';
               }


 ?>

</div>
  </main>




<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
  </body>
</html>

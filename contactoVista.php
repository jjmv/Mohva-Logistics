<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css/">
    <link href="contactoEstilos.css" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/estilos.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<main>
     <nav class="black">
         <div class=" container nav-wrapper black">
           <a href="index.php"><i class="material-icons left">home</i></a>
           <a href="index.php" class="brand-logo ">Mohva Logistics</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="compania.php"><i class="material-icons left">perm_identity</i>Compañia</a></li>
             <li><a href="aduanas.php"><i class="material-icons left">language</i>Aduanas</a></li>
             <li><a href="procesos.php"><i class="material-icons left">work</i>Procesos</a></li>
             <li><a href="#"><i class="material-icons left">phone</i>Contacto</a></li>

           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a href="compania.php">Compañia</a></li>
             <li><a href="aduanas.php">Aduanas</a></li>
             <li><a href="procesos.php">Procesos</a></li>
             <li><a href="#">Contacto</a></li>
           </ul>
       </div>
   </nav>

</main>





<body>
  <div class="wrap">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

          <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

          <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

          <!-- <div class="alert error"> <- se agregaran con php
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, est laborum.
          </div>

          <div class="alert success">
              Éxito
          </div> -->

          <?php if(!empty($errores)):  ?>
              <div class="alert error">
                  <?php echo $errores; ?>
              </div>
          <?php elseif($enviado):  ?>
            <div class="alert success">
                <p>Enviado correctamente</p>
            </div>
          <?php endif ?>
          
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          
      </form>
  </div>

</body>


<footer class="page-footer black">
     <div class="container">
       <div class="row">
         <div class="col l6 s12">
           <h5 class="white-text">Footer Content</h5>
           <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
         </div>
         <div class="col l4 offset-l2 s12">
           <h5 class="white-text">Links</h5>
           <ul>
             <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>

           </ul>
         </div>
       </div>
     </div>
     <div class="footer-copyright grey darken-4">
       <div class="container">
       © 2014 Copyright Text
       <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
       </div>
     </div>
   </footer>
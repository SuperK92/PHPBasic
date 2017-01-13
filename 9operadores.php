<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operadores</title>
  </head>
  <body>
    <form class="" action="" method="post" id="datos">
      <label for="">Nombre</label>
      <input type="text" name="nombre" id="nombre" value=""><br/>
      <label for="">Edad</label>
      <input type="text" name="edad" id="edad" value=""><br/>
      <br/>
      <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>

    <?php
      if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        if($nombre == "Aco"){
          echo "Welcome Aco";
        } else {
          echo "No eres Aco";
        }
        echo "<br/>";
        if($edad>=18){
          echo "Mayor de edad";
        } else {
          echo "No eres mayor de edad";
        }
      }

     ?>

  </body>
</html>

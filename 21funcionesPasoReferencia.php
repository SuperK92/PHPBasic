<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paso por referencia</title>
  </head>
  <body>
    <?php
      function incrementa(&$valor){
        $valor++;
        return $valor;
      }

      $num = 5;
      echo "Valor llamando la función: " .incrementa($num) . "<br>";
      echo "Valor de la variable: " .$num;
      echo "<br>";

      function cambia_mayus(&$param){
        $param = strtolower($param);
        $param = ucwords($param);
        return $param;

      }

      $txt = "hOlA mUnDo";
      echo cambia_mayus($txt) . "<br>";
      echo $txt;

     ?>
  </body>
</html>

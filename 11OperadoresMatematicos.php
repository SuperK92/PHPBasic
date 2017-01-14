<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operadores Matematicos</title>
  </head>
  <body>
    <form class="" action="" method="post" name="form1">
      <label for="num1"></label>
      <input type="text" name="num1" value="" id="num1">
      <label for="num2"></label>
      <input type="text" name="num2" value="" id="num2">
      <label for="operacion"></label>
      <select class="" name="operacion" id="operacion">
          <option value="Suma">Suma</option>
          <option value="Resta">Resta</option>
          <option value="Multiplicacion">Multiplicacion</option>
          <option value="Division">Division</option>
          <option value="Modulo">Modulo</option>
      </select>
      <br><br>
      <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">

    </form>

    <br>

    <?php
      if(isset($_POST['button'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $oper = $_POST['operacion'];

        if(empty($num1) || empty($num2)){
          echo "Campos vacios";
        } else if(!is_numeric($num1) || !is_numeric($num2)){
          echo "Debe introducir numeros";
        } else {
          // if(!strcmp("Suma", $oper)){
          //   echo "Resultado: " .($num1+$num2);
          // }
          switch ($oper) {
            case 'Suma':
              echo "Resultado: " .($num1+$num2);
              break;

            case 'Resta':
              echo "Resultado: " .($num1-$num2);
              break;

            case 'Multiplicacion':
              echo "Resultado: " .($num1*$num2);
              break;

            case 'Division':
              echo "Resultado: " .($num1/$num2);
              break;

            case 'Modulo':
              echo "Resultado: " .($num1%$num2);
              break;

            default:
              # code...
              break;
          }
        }


      }

     ?>

  </body>
</html>

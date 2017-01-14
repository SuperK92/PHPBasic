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
    calcular($num1,$num2,$oper);

  }
}

  function calcular($num1,$num2,$oper){

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

 ?>

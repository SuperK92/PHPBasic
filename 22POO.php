<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POO</title>
  </head>
  <body>

    <?php
      class Coche{
        var $ruedas;
        var $color;
        var $motor;

        function Coche(){
          $this->ruedas=4;
          $this->color="Negro";
          $this->motor=1600;
        }
        function arrancar(){
          echo "Estoy arrancando<br>";
        }

        function girar(){
          echo "Estoy girando<br>";
        }

        function frenar(){
          echo "Estoy frenando<br>";
        }

        function setColor($col){
          $this->color=$col;
          return $this->color;
        }
      }

      $mazda = new Coche();
      $suzuki = new Coche();
      $honda = new Coche();

      $mazda->arrancar();

      echo "El mazda tiene: " .$mazda->ruedas ."<br>";

      $suzuki->setColor("Rojo");

      echo "Suzuki color: " .$suzuki->color ."<br>";

     ?>

  </body>
</html>

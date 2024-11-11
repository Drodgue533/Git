<?php

    class Calculadora{

        public function sumar($valor, $valor1){
            $resultado = $valor1 + $valor;
            return $resultado;
        }

    }

    require "vendor/autoload.php";
    require "Calculadora.php";
    use PHPUnit\Framework\TestCase;
    class CalculadoraTest extends TestCase{
      
    }
    $prueba = new Calculadora();
    echo $prueba->sumar(3,4);
?>
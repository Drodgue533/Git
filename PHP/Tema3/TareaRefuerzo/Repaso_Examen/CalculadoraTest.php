<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculadora.php';

class CalculadoraTest extends TestCase
{
    public function testSumar()
    {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(2, 3);
        $this->assertEquals(5, $resultado, "La suma de 2 y 3 debe ser 5.");
    }
}

//En la terminal vamos al directorio donde están nuestros archivos, mediante el siguiente comando:

//vendor/bin/phpunit --bootstrap Calculadora.php CalculadoraTest.php


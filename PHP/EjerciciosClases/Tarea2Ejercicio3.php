<?php

// Daniel Rodríguez Guerra

class Coche
{

    // Atributos

    private $marca;
    private $modelo;
    private $color;
    private $velocidad;
    private $encendido = false;

    // Constructor

    public function __construct($marca, $modelo, $color, $velocidad)
    {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }

    // Get & Set

    public function getMarca()
    {
        return $this->marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function setEncendido($encendido)
    {
        $this->encendido = $encendido;
    }
    public function getEncendido()
    {
        return $this->encendido;
    }

    // Métodos

    // Metodo para cambiar marca

    public function cambiarMarca($nuevaMarca)
    {
        $this->setMarca($nuevaMarca);
    }

    // Metodo para cambiar modelo

    public function cambiarModelo($nuevaModelo)
    {
        $this->setModelo($nuevaModelo);
    }

    // Metodo para cambiar color

    public function cambiarColor($nuevoColor)
    {
        $this->setColor($nuevoColor);
    }

    // Metodo para cambiar velocidad

    public function cambiarVelocidad($nuevaVelocidad)
    {
        $this->setVelocidad($nuevaVelocidad);
    }

    public function __toString()
    {
        return "Marca: " . $this->getMarca() .
            " Modelo: " . $this->getModelo() .
            " Color: " . $this->getColor() .
            " Velocidad: " . $this->getVelocidad();
    }
    // Método para arrancar el coche

    public function arrancar()
    {

        if ($this->encendido == false) {
            $this->setEncendido(true);
            echo "El coche de la marca " . $this->getMarca() . " y el modelo " . $this->getModelo() . " se encuentra en marcha" . "\n";
        }
    }

    // Método para parar el coche

    public function parar()
    {
        if ($this->encendido == true) {
            $this->setEncendido(false);
            echo "El coche de la marca " . $this->getMarca() . "y el modelo " . $this->getModelo() . " se encuentra parado" . "\n";
        }
    }
}

class Berlina extends Coche
{

    // Atributos

    private $plazas;

    // Constructor

    public function __construct($marca, $modelo, $color, $velocidad, $plazas)
    {
        parent::__construct($marca, $modelo, $color, $velocidad, $plazas);
        $this->plazas = $plazas;
    }

    // get y set

    public function getPlazas()
    {
        return $this->plazas;
    }
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    // Métodos

    public function __toString()
    {
        return parent::__toString() . " Número de plazas: " . $this->plazas . "\n";
    }
}

// Creamos el un objeto coche

$nuevoCoche = new Coche("toyota", "c1", "negro", 300);

// Mostramos el coche

echo $nuevoCoche . "\n";

// Modificamos y mostramos el nuevo coche

$nuevoCoche->cambiarMarca("Renault");

echo $nuevoCoche . "\n";

// Creamos el objeto coche para arrancar y apagar

$arrancarCoche = new Coche("BMW", "c4", "verde", 300);

$arrancarCoche->arrancar();

$arrancarCoche->parar();


// Creamos la berlina y la mostramos

$nuevaBerlina = new Berlina("Berlina", "camion", "azul", 300, "5");

echo $nuevaBerlina;

// Modificamos algun campo

$nuevaBerlina->cambiarColor("gris");
$nuevaBerlina->cambiarMarca("Mercedes");

// Mostramos de nuevo

echo $nuevaBerlina;

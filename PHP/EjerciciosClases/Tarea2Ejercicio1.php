<?php

// Daniel Rodríguez Guerra

class Coche
{

    // Atributos

    private $marca;
    private $modelo;
    private $color;
    private $velocidad;

    // Constructor

    public function __construct($marca, $modelo, $color, $velocidad)
    {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }

    // Get & Set

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
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

    // Métodos

    // Metodo para cambiar marca

    public function cambiarMarca($nuevaMarca)
    {
        $this->setMarca($nuevaMarca);
    }

    // Metodo para cambiar modelo

    public function cambiarModelo($nuevaModelo)
    {
        $this->setMarca($nuevaModelo);
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
}

// Creamos el un objeto coche

$nuevoCoche = new Coche("toyota", "c1", "negro", 300);

// Mostramos el coche

echo $nuevoCoche . "\n";

// Modificamos y mostramos el nuevo coche

$nuevoCoche->cambiarMarca("Renault");

echo $nuevoCoche;

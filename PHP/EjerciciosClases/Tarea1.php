<?php

// Daniel Rodríguez Guerra

class Animal
{

    // Atributos

    public $nombre;
    public $especie;


    // Constructor

    public function __construct($nombre, $especie)
    {
        $this->nombre = $nombre;
        $this->especie = $especie;
    }

    // Métodos

    // Obtener nombre animal
    public function nombreAnimal()
    {
        return $this->nombre;
    }

    // toString

    public function __toString()
    {
        return "Nombre: " . $this->nombre .
            " Especie: " . $this->especie;
    }

    // comportamiento

    public function comportamiento($valor)
    {

        return "El animal $valor es bueno";
    }
    public function comportamiento2()
    {
        echo "El animal " .  $this->nombre . " es malo";
    }
}

// Crear un nuevo objeto

$gato = new Animal("Federico", "Gato", "bueno");

// Mostramos por pantalla

echo $gato . "\n";

// Modificamos atributos

$gato->nombre = "CasiMiro";
$gato->especie = "Perro";

echo $gato . "\n";

$Abelino = "Abelino";

// Comprobamos comportamiento

echo $gato->comportamiento($Abelino);
echo "\n";
echo $gato->comportamiento2();

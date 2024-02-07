<?php

class Persona{
public string $nombre;
public int $edad;
public float $altura;


public function __construct($nombre,$edad,$altura) {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->altura = $altura; 
}

public function saludar() {
    echo "¡Hola, " . $this->nombre . "!";
    echo"<br>";
}
public function obtener_edad() {
    echo "Su edad es: " . $this->edad;
    echo"<br>";
}

public function obtener_altura() {
    echo "Su altura es: " . $this->altura;
    echo"<br>";
}

}

$persona = new Persona("Juan", 23, 1.70);
$persona->saludar();
$persona->obtener_edad();
$persona->obtener_altura();




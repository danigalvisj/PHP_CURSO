<?php

class Persona{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        echo "Su nombre es:" . $this->nombre . " y su edad es:".$this->edad;
        echo"<br>";
    }
}

class Estudiante extends Persona{
    public string $carrera;

    public function __construct(string $nombre, int $edad, string $carrera){
        parent:: __construct ($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function estudiar() {
        echo "Està estudiando";
        echo"<br>";
    }
  
}

$Estudiante = new Estudiante("Juan", 23, "Medicina");  
$Estudiante->presentarse();
$Estudiante->estudiar();


<?php
class Coche
{
    public $id;
    public $marca;
    public $modelo;
    public $precio;
    public $descripcion;
    public $anyo;
    public $kilometros;
    public $combustible;
    public $color;
    public $motor;
    public $puertas;
    public $transmision;
    public $imagenes;

    public function __construct($id, $marca, $modelo, $precio, $descripcion, $anyo, $kilometros, $combustible, $color, $motor, $puertas, $transmision, $imagenes)
    {
        $this->id = $id;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anyo = $anyo;
        $this->kilometros = $kilometros;
        $this->motor = $motor;
        $this->transmision = $transmision;
        $this->color = $color;
        $this->combustible = $combustible;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->imagenes = $imagenes;
    }
}

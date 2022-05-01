<?php
require_once "Poligono.php";
require_once "IPoligono.php";
class Triangulo extends Poligono implements IPoligono{
    public function __construct($medida_lado=1)
    {
      parent::__construct($medida_lado, 3);
    }

    public function calcularArea(){
        $area =  (sqrt(3)/4)*pow($this->getMedidaLado(),2);
        return $area;

    }
    public function calcularApotema(){

    }

}
<?php
 class Poligono{
     private $medida_lado;
     private $numero_lado;

     

     public function __construct($medida_lado=1, $numero_lado=3)
     {
         $this->medida_lado = $medida_lado;
         $this->numero_lado =$numero_lado;
     }

     public function setMedidaLado($medida_lado){
         $this->medida_lado = $medida_lado;

     }
     public function setNumeroLado($numero_lado){
         $this->numero_lado = $numero_lado;

     }
     public function getMedidaLado(){
         return $this->medida_lado;
         
     }
     public function getNumeroLado(){
         return $this->numero_lado;
     }

     public function calcularPerimetro(){
         $perimetro = $this->numero_lado * $this->medida_lado;
         return $perimetro;
     }

 }
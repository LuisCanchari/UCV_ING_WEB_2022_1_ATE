<?php

class Moneda
{
    private  $codigo;
    private  $nombre;
    private  $factor;
    
    public function __construct($codigo, $nombre, $factor)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->factor = $factor;
        
    }
    public function getFactor()
    {
        return $this->factor;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDatos()
    {
        return "[$this->codigo] $this->nombre";
    }
}

<?php
require_once "Moneda.php";
class Conversor
{
    private  $monedas = [];

    public function __construct()
    {
      
        $this->cargaInicial();
    }

    public function cargaInicial(){
        $this->addMoneda(new Moneda("PEN", "Sol", 3.8,));
        $this->addMoneda(new Moneda("USD", "Dolar US", 1));
        $this->addMoneda(new Moneda("GBP", "Libra Esterlina", 0.74));
        $this->addMoneda(new Moneda("EUR", "Euro", 0.94));
        $this->addMoneda(new Moneda("VEF", "Bolivar Ven", 447));
        $this->addMoneda(new Moneda("JPY", "Jen", 129.68));
        $this->addMoneda(new Moneda("XYZ", "Xyzabc", 20.20));

    }

    public function  addMoneda($moneda)
    {
        if ($moneda instanceof Moneda) {
            $key = $moneda->getCodigo();
            $this->monedas[$key] = $moneda;
        }
    }

    public function listaMonedas()
    {
        return $this->monedas;
    }

    public function getMoneda($key)
    {
        $moneda = $this->monedas[$key];
        return $moneda;
    }

    public function convertir($monto,  $keyOrigen='PEN', $keyDestino='PEN')
    {
        $monedaOrigen = $this->getMoneda($keyOrigen);
        $monedaDestino = $this->getMoneda($keyDestino);

        $resultado = $monto * $monedaDestino->getFactor() / $monedaOrigen->getFactor();
        return $resultado;
    }
}
/*
$conversor = new Conversor();
$conversor->addMoneda(new Moneda("JPY","Jen", 129.68));

print_r($conversor->listaMonedas());*/

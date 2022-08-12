<?php

class Prestamo
{
    private $montoSolicitado;
    private $tasaEfectivaMensual;
    private $cantidadCuotas;
    private $costoFinancieroTotal;

    public function getMontoSolicitado()
    {
        return $this->montoSolicitado;
    }

    public function setMontoSolicitado($montoSolicitado)
    {
        $this->montoSolicitado = $montoSolicitado;
    }

    public function getTasaEfectivaMensual()
    {
        return $this->tasaEfectivaMensual;
    }

    public function setTasaEfectivaMensual($tasaEfectivaMensual)
    {
        $this->tasaEfectivaMensual = $tasaEfectivaMensual;
    }

    public function getCantidadCuotas()
    {
        return $this->cantidadCuotas;
    }

    public function setCantidadCuotas($cantidadCuotas)
    {
        $this->cantidadCuotas = $cantidadCuotas;
    }

    public function getCostoFinancieroTotal()
    {
        return $this->costoFinancieroTotal;
    }

    public function setCostoFinancieroTotal($costoFinancieroTotal)
    {
        $this->costoFinancieroTotal = $costoFinancieroTotal;
    }

    public function MostrarDatos()
    {
        echo 'Monto Solicitado: ' . $this->getMontoSolicitado() . '<br>';
        echo 'Tasa efectiva mensual: ' . $this->getTasaEfectivaMensual() . '<br>';
        echo 'Cantidad de cuotas: ' . $this->getCantidadCuotas() . '<br>';
        echo 'Costo financiero total: ' . $this->getCostoFinancieroTotal() . '<br>';
    }
}

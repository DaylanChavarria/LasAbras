<?php

/**
 * Clase descriptiva de Empresa 
 * 
 * @author Gustavo
 */
class Empresa {
    public  $Id;
    public $historia;
    public $quinesSomos;
    public $descripcionGaleria;
    public $elaboracion;
    public $descripcionProductoA;
    public $elaboracionProductoB;
    public $denominacion;
    public $descripcionContactos;
    public $direccion;
    public $correo;
    public $telefonoA;
    public $telefonoB;
    public $encargadoA;
    public $encargadoB;
    public $mision;
    public $vision;
    public $idioma;
    
    public function Empresa($Id, $historia, $quinesSomos, $descripcionGaleria, $elaboracion, $descripcionProductoA,
        $elaboracionProductoB, $denominacion, $descripcionContactos, $direccion, $correo, $telefonoA, $telefonoB, 
        $encargadoA, $encargadoB, $mision, $vision, $idioma){

        $this->Id = $Id;
        $this->historia = $historia;
        $this->quinesSomos = $quinesSomos;
        $this->descripcionGaleria = $descripcionGaleria;
        $this->elaboracion = $elaboracion;
        $this->descripcionProductoA = $descripcionProductoA;
        $this->elaboracionProductoB = $elaboracionProductoB;
        $this->denominacion = $denominacion;
        $this->descripcionContactos = $descripcionContactos;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->telefonoA = $telefonoA;
        $this->telefonoB = $telefonoB;
        $this->encargadoA = $encargadoA;
        $this->encargadoB = $encargadoB;
        $this->mision = $mision;
        $this->vision = $vision;
        $this->idioma = $idioma;
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    private $nombre;
    private $fecha_de_nacimiento;


    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of fecha_de_nacimiento
     */ 
    public function getFecha_de_nacimiento()
    {
        return $this->fecha_de_nacimiento;
    }

    /**
     * Set the value of fecha_de_nacimiento
     *
     * @return  self
     */ 
    public function setFecha_de_nacimiento($fecha_de_nacimiento)
    {
        $this->fecha_de_nacimiento = $fecha_de_nacimiento;

        return $this;
    }
}

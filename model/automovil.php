<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of automovil
 *
 * @author IvánDarío
 */
class automovil {
    private $placa;
    private $año;
    
    public function getPlaca() {
        return $this->placa;
    }

    public function getAño() {
        return $this->año;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function setAño($año) {
        $this->año = $año;
    }


}

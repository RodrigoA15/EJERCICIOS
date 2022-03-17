<?php

require_once("CLASE_FUTBOL.PHP");

class voleybol extends futbol {

    public $puesto_campo;
    
    public function __construct($vrnombre, $vrcelular, $vremail,$vrestatura, $vredad, $vrpuesto_campo)
    {
        parent::__construct($vrnombre, $vrcelular, $vremail,$vrestatura, $vredad, $vrpuesto_campo);
        $this->puesto_campo=$vrpuesto_campo;


    }
    public function getpuesto_campo(){
        return $this->puesto_campo;
    }















}









?>
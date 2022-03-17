<?php

require_once("CLASE_JUGADOR.PHP");

class futbol extends jugador{

    public $estatura;
    public $edad;

    public function __construct($vrnombre, $vrcelular, $vremail,$vrestatura, $vredad)
    {
        parent::__construct($vrnombre, $vrcelular, $vremail,$vrestatura, $vredad);
        $this->estatura=$vrestatura;
        $this->edad=$vredad;
    }

    public function getestatura(){
        return $this->estatura;
    }

    public function getedad(){
        return $this->edad;
    }
    


        


}






?>
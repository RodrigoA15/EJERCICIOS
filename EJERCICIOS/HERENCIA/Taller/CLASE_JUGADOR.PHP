<?php

class jugador {

    public $nombre;
    public $celular;
    public $email;

    public function __construct($vrnombre, $vrcelular, $vremail)
    {
        $this->nombre = $vrnombre;
        $this->celular= $vrcelular;
        $this->email = $vremail;

    }

    public function getdatospersona(){
        $arraypersona= array (
            'nombre: '=>$this->nombre,
            'celular: '=>$this->celular,
            'email: '=>$this->email,


        );
        return $arraypersona;
    }

    public function getcelular(){
        return $this->celular;
    }

    public function setcelular($vrcelular){
        $this->celular=$vrcelular;
       }

















}







?>
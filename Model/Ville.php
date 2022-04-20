<?php

class Ville {

    private string $idVille;
    
    public function __construct(string $idVille){
        $this->idVille = $idVille;
        
    }

    //getters

    public function getVille():string{
        return $this->idVille;
    }

    //setters

    public function setVille(string $idVille):void{
        $this->idVille = $idVille;
    }
    
}

?>
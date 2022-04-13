<?php

include_once 'User.php';

class  Livreur extends User{

    private int $secteurLiv;

    //getters
    public function getSecteurLiv():int{
        return $this->secteurLiv;
    }

    //setters

    public function setSecteurLiv(int $secteurLiv):void{
        $this->secteurLiv = $secteurLiv;
    }
     
}

?>
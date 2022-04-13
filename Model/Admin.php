<?php

include_once 'User.php';

class Administrator extends User{
    private int $adminNumber;

    //getters

    public function getAdminNumber():int{
        return $this->adminNumber;
    }

    //setters

    public function setAdminNumber($adminNumber):int{
        $this->adminNumber = $adminNumber;
    }
}

?>
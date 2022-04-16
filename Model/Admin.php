<?php

include_once 'User.php';

class Admin extends User{
    private int $adminId;

    //getters

    public function getAdminNumber():int{
        return $this->adminId;
    }

    //setters

    public function setAdminNumber($adminNumber):int{
        $this->adminNumber = $adminId;
    }
}

?>
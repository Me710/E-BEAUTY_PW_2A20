<?php

include_once 'User.php';

class Admin{
    private int $adminId;
    private string $Email;
    private string $Password;
    
    function __construct(string $Email,string $Password){
        $this->Email=$Email;
        $this->Password=$Password;
    }

    //getters

    public function getAdminNumber():int{
        return $this->adminId;
    }
    public function getEmail():string{
        return $this->Email;
    }
    public function getPassword():string{
        return $this->Password;
    }

    //setters

    public function setEmail($email):void{
        $this->Email = $email;
    }
    public function setPassword($password):void{
        $this->Password = $password;
    }
}

?>
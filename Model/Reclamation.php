<?php

class Reclamation{

    private int $recid;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $ville;
    private string $userid;
    
    public function __construct(string $firstName,string $lastName,string $userid,string $email,string $ville,string $message){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userid= $userid;
        $this->email = $email;
        $this->ville = $ville;
        $this->message = $message;
        
    }

    //getters
    public function getFirstName():string{
        return $this->firstName;
    }
    public function getLastName():string{
        return $this->lastName;
    }
    public function getUserId():string{
        return $this->userid;
    }
    public function getEmail():string{
        return $this->email;
    }

    public function getVille():string{
        return $this->ville;
    }
    public function getMessage():string{
        return $this->message;
    }

    

    //setters
    public function setFirstName(string $firstName):void{
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName):void{
        $this->lastName = $lastName;
    }
    public function setEmail(string $email):void{
        $this->email = $email;
    }
    public function setVille(string $ville):void{
        $this->ville = $ville;
    }
    public function setMessage(string $message):void{
        $this->message = $message;
    }
    
}

?>
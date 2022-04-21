<?php

class User{

    private int $userId;
    private string $firstName;
    private string $lastName;
    private string $userName;
    private string $email;
    private string $password;
    private string $ville;
    private string $temoignage;
    
    public function __construct(string $firstName,string $lastName,string $userName,string $email,string $password,string $ville){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->ville = $ville;
        $this->temoignage = "";
        
    }

    //getters
    public function getFirstName():string{
        return $this->firstName;
    }
    public function getLastName():string{
        return $this->lastName;
    }
    public function getUserName():string{
        return $this->userName;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getPassword():string{
        return $this->password;
    }

    public function getVille():string{
        return $this->ville;
    }
    public function getTemoignage():string{
        return $this->temoignage;
    }

    

    //setters
    public function setFirstName(string $firstName):void{
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName):void{
        $this->lastName = $lastName;
    }
    public function setUserName(string $userName):void{
        $this->userName = $userName;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function setPassword(string $password):void{
        $this->password = $password;
    }

    public function setVille(string $ville):void{
        $this->ville = $ville;
    }
    public function setTemoignage(string $temoignage):void{
        $this->temoignage = $temoignage;
    }
    
}

?>
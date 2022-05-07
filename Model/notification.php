<?php

class Notification{

    private int $notid;
    private int $userid;
    private string $Name;
    private string $Type;
    private string $Message;
    private string $Status;
    private string $Date;
    
    public function __construct(string $name,string $type,string $message,string $status,string $date){
        
        $this->Name = $name;
        $this->Type= $type;
        $this->Message = $message;
        $this->Status = $status;
        $this->Date = $date;
        
    }

    //getters
    public function getName():string{
        return $this->Name;
    }
    public function getType():string{
        return $this->Type;
    }
    public function getMessage():string{
        return $this->Message;
    }
    public function getStatus():string{
        return $this->Status;
    }

    public function getDate():string{
        return $this->Date;
    }

    

    //setters
    public function setName(string $Name):void{
        $this->Name = $Name;
    }
    public function setType(string $Type):void{
        $this->Type = $Type;
    }
    public function setStatus(string $Status):void{
        $this->Status = $Status;
    }
    public function setDate(string $Date):void{
        $this->Date = $Date;
    }
    public function setMessage(string $message):void{
        $this->message = $message;
    }
    
}

?>
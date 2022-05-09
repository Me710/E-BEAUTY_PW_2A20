<?php
	class Type{
		private $id_type=null;
		private $Nom=null;
		private $com=null;

		//j
		private $password=null;
		function __construct($id_type, $Nom, $com){
			$this->id_type=$id_type;
			$this->Nom=$Nom;
			$this->com=$com;

		}
		function getId(){
			return $this->id_type;
		}
		function getNom(){
			return $this->Nom;
		}
		function getCom(){
			return $this->com;
		}
	
        function setId(string $id_type){
			$this->id_type=$id_type;
		}
		function setNom(string $Nom){
			$this->Nom=$Nom;
		}	
	}
?>
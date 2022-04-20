<?php
	class Blog{
		private $id_blog=null;
		private $Auteur=null;
		private $Titre=null;
		private $Date;
		//j
		private $password=null;
		function __construct($id_blog, $Auteur, $Titre, $Date, $Image, $texte, $type){
			$this->id_blog=$id_blog;
			$this->Auteur=$Auteur;
            $this->Titre=$Titre;
            $this->Date=$Date;
			$this->Image=$Image;
            $this->texte=$texte;
            $this->type=$type;
		}
		function getId(){
			return $this->id_blog;
		}
		function getAuteur(){
			return $this->Auteur;
		}
		function getTitre(){
			return $this->Titre;
		}
		function getDate(){
			return $this->Date;
		}
		function getIm(){
			return $this->Image;
		}
		function getText(){
			return $this->texte;
		}
		function getType(){
			return $this->type;
		}
        function setId(string $id_blog){
			$this->id_blog=$id_blog;
		}
		function setAuteur(string $Auteur){
			$this->Auteur=$Auteur;
		}
		function setTitre(string $Titre){
			$this->Titre=$Titre;
		}
		
		function setDate(string $Date){
			$this->Date=$Date;
		}
		
	}


?>
<?php
	class categorie{
		private $id_categorie=null;
		private $nom_categorie=null;
        private $image_categorie=null;
		function __construct($id_categorie, $nom_categorie,$image_categorie){
            $this->id_categorie=$id_categorie;
			$this->nom_categorie=$nom_categorie;
            $this->image_categorie=$image_categorie;
		}
		function getid_categorie(){
			return $this->id_categorie;
		}
		function getnom_categorie(){
			return $this->nom_categorie;
		}
        function getimage_categorie(){
			return $this->image_categorie;
		}
        function setid_categorie(string $id_categorie){
			$this->id_categorie=$id_categorie;
		}
        function setnom_categorie(string $nom_categorie){
			$this->nom_categorie=$nom_categorie;
		}
        function setimage_categorie(string $image_categorie){
			$this->image_categorie=$image_categorie;
		}
		
	}
	
?>
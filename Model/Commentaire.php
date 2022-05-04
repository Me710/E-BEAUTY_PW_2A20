<?php
	class Commentaire
    {
		private $id_com=null;
		private $pseudo=null;
		private $commentaire=null;
	//	private $id_blog;
		//j
		private $password=null;
	//	function __construct($id_com, $pseudo, $commentaire/* $id_blog, $Image, $texte, $type*/){
	//		$this->id_com=$id_com;
	//		$this->pseudo=$pseudo;
      //      $this->commentaire=$commentaire;
      //      $this->id_blog=$id_blog;
       // }
		function getId(){
			return $this->id_com;
		}
		function getPs(){
			return $this->pseudo;
		}
		function getCom(){
			return $this->commentaire;
		}
		/*function getIdb(){
			return $this->id_blog;
		}*/

        function setId(string $id_com){
			$this->id_com=$id_com;
		}
		function setpseudo(string $pseudo){
			$this->pseudo=$pseudo;
		}
		function setcom(string $commentaire){
			$this->commentaire=$commentaire;
		}	
}

?>
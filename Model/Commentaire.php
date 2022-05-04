<?php
	class Commentaire
    {
		private $id_com=null;
		private $pseudo=null;
		private $commentaire=null;
	//	private $id_blog;
		private $password=null;
		function __construct($id_com, $pseudo, $commentaire){
			$this->id_com=$id_com;
			$this->pseudo=$pseudo;
            $this->commentaire=$commentaire;
        //    $this->id_blog=$id_blog;
        }
		function getIdc(){
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

        function setIdc(string $id_com){
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
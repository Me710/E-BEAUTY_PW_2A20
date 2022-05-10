<?php

	/**
	* 
	*/
class commentaire
	{
		public $comId;
		public $pseudo;
		private $commentaire;
		


		function __construct(/*$comId,*/$pseudo,$commentaire)
		{
			//$this->comId=$comId;
			$this->pseudo=$pseudo;
			$this->commentaire=$commentaire;
	
		
			
		}

		function getcomId(){
			return $this->comId;
		}



		function setcomId($comId){
			$this->comId=$comId;
		}

		function getpseudo(){
			return $this->pseudo;
		}



		function setpseudo($pseudo){
			$this->pseudo=$pseudo;
		}

		function getcommentaire(){
			return $this->commentaire;
		}
		

	
		function setcommentaire($commentaire){
			$this->commentaire=$commentaire;
		}

		
	
	}
	

  ?>

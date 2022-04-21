<?php
class Service{
    private string $libelle;
    private string $description;
    private string $prix;
    
    function __construct(string $libelle, string $description, string $prix) {
        $this->libelle = $libelle;
        $this->description = $description;
        $this->prix = $prix;
    }

    function afficherservices() {
        $t=array($this->libelle,$this->description,$this->prix);
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>";
        echo "Libelle";
        echo "<td>";
        echo "Description";
        echo "<td>";
        echo "Prix";
        echo "</tr>";
        echo "<tr>";
        for($i=0; $i<3; $i++) {
            echo "<td>";
            echo $t[$i];        
        }
        echo "</tr>";
        echo "</table>";
    }
    function getLibelle() {
        return $this->libelle;
    }
    function getDescription() {
        return $this->description;
    }
    function getPrix() {
        return $this->prix;
    }
    function setLibelle($libelle) {
        $this->libelle=$libelle;
    }
	function setDescription($description) {
        $this->description=$description;
    }
	function setPrix($prix) {
        $this->prix=$prix;
    }
}
    //$utilisateur = new User("bellalouna", "iheb", "bellalouna.iheb@gmail.com", "iheb", "123456789" );
    //$utilisateur->afficher();
?> 
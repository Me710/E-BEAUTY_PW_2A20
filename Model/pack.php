<?php
class Pack{
    private string $nom;
    private string $description;
    
    function __construct(string $nom, string $description) {
        $this->nom = $nom;
        $this->description = $description;
    }

function afficherpacks() {
        $t=array($this->nom,$this->description);
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>";
        echo "Nom";
        echo "<td>";
        echo "Description";
        echo "</tr>";
        echo "<tr>";
        for($i=0; $i<3; $i++) {
            echo "<td>";
            echo $t[$i];        
        }
        echo "</tr>";
        echo "</table>";
    }

    function getNom() {
        return $this->nom;
    }
    function getDescription() {
        return $this->description;
    }
	function setNom($nom) {
        $this->nom=$nom;
    }
	function setDescription($description) {
        $this->description=$description;
    }
}

?>
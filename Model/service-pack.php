<?php
class ServicePack{
    private string $idService;
    private string $idPack;
    private string $libelleService;
    private string $prixService;    
    
    function __construct(string $idService, string $idPack, string $libelleService, string $prixService) {
        $this->idService = $idService;
        $this->idPack = $idPack;
        $this->libelleService = $libelleService;
        $this->prixService = $prixService;
    }

function afficherservicepack() {
        $t=array($this->idPack, $this->idService, $this->tauxReduction, $this->dateValidite, $this->prix);
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>";
        echo "IdPack";
        echo "<td>";
        echo "IdService";
        echo "<td>";
        echo "DateValidite";
        echo "<td>";
        echo "TauxReduction";
        echo "<td>";
        echo "Prix";
        echo "</tr>";
        echo "<tr>";
        for($i=0; $i<4; $i++) {
            echo "<td>";
            echo $t[$i];        
        }
        echo "</tr>";
        echo "</table>";
    }

    function getIdService() {
        return $this->idService;
    }
    function getLibService() {
        return $this->idLibService;
    }
    function getPrixService() {
        return $this->prixService;
    }
    function getDateValidite() {
        return $this->dateValidite;
    }
    function getPrix() {
        return $this->prix;
    }
	function setNom($nom) {
        $this->nom=$nom;
    }
    
}

?>
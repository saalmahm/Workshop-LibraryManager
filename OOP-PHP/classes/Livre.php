<?php
class Livre {
    private $nomLivre; 
    private $nomAuteur; 
    private $estDisponible; 

    public function __construct($titreLivre, $auteurLivre) {
        $this->nomLivre = $titreLivre; 
        $this->nomAuteur = $auteurLivre; 
        $this->estDisponible = true; 
    }

    public function afficherDetails() {
        $statut = $this->estDisponible ? "Disponible" : "Non disponible"; 
        echo "Titre : {$this->nomLivre}, Auteur : {$this->nomAuteur}, Statut : {$statut}\n";
    }

    public function emprunter() {
        if ($this->estDisponible) {
            $this->estDisponible = false; 
            return true; // emprunt a réussi
        }
        return false; // Emprunt impossible
    }

    public function retourner() {
        $this->estDisponible = true; 
    }
}
?>
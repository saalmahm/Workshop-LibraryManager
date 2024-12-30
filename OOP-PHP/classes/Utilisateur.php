<?php
class Utilisateur {
    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function emprunterLivre(Livre $livre) {
        if ($livre->emprunter()) {
            echo "{$this->nom} a emprunté le livre.\n";
        } else {
            echo "Le livre n'est pas disponible.\n";
        }
    }

    public function retournerLivre(Livre $livre) {
        $livre->retourner();
        echo "{$this->nom} a retourné le livre.\n";
    }
}
?>

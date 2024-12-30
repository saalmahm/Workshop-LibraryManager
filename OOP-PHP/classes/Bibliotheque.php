<?php
class Bibliotheque {
    private $livres = [];

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function listerLivres() {
        foreach ($this->livres as $livre) {
            $livre->afficherDetails();
        }
    }
}
?>

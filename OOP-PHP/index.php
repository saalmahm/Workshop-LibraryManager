<?php
// Inclure les classes
require_once 'classes/Livre.php';
require_once 'classes/Bibliotheque.php';
require_once 'classes/Utilisateur.php';

// Créer des objets Livre
$livre1 = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry");
$livre2 = new Livre("1984", "George Orwell");

// Créer une bibliothèque et ajouter les livres
$biblio = new Bibliotheque();
$biblio->ajouterLivre($livre1);
$biblio->ajouterLivre($livre2);

// Lister les livres disponibles
echo "Liste des livres :\n";
$biblio->listerLivres();

// Créer un utilisateur
$utilisateur = new Utilisateur("Alice");

// Emprunter un livre
echo "\nAlice emprunte 'Le Petit Prince':\n";
$utilisateur->emprunterLivre($livre1);

// Lister les livres après emprunt
echo "\nListe des livres après emprunt :\n";
$biblio->listerLivres();

// Retourner le livre
echo "\nAlice retourne 'Le Petit Prince':\n";
$utilisateur->retournerLivre($livre1);

// Lister les livres après retour
echo "\nListe des livres après retour :\n";
$biblio->listerLivres();
?>

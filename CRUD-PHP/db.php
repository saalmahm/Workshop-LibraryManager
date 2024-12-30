<?php
$host = 'localhost';
$user = 'root';
$password = 'hamdi';
$database = 'bibliotheque';

// Connexion à la base de données
$conn = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}
?>

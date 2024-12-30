<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $date_added = $_POST['date_added'];
    $available = $_POST['available'] ? 1 : 0;

    $query = "INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) VALUES ('$title', '$author', '$category', '$date_added', $available)";
    if (mysqli_query($conn, $query)) {
        echo "Livre ajouté avec succès.";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>

<form method="post">
    Titre: <input type="text" name="title"><br>
    Auteur: <input type="text" name="author"><br>
    Catégorie: <input type="text" name="category"><br>
    Date d'ajout: <input type="date" name="date_added"><br>
    Disponible: <input type="checkbox" name="available" value="1"><br>
    <input type="submit" value="Ajouter">
</form>
<button><a href="/liste_livres.php">voir liste des livres </a></button>

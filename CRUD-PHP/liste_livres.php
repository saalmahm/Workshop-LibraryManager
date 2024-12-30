<?php
require_once 'db.php';

$query = "SELECT * FROM livres";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<table border='1'>
            <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Catégorie</th><th>Date d'ajout</th><th>Disponible</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['titre'] . "</td>
                <td>" . $row['auteur'] . "</td>
                <td>" . $row['categorie'] . "</td>
                <td>" . $row['date_ajout'] . "</td>
                <td>" . ($row['disponible'] ? 'Oui' : 'Non') . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Erreur : " . mysqli_error($conn);
}

echo "<a href='/ajouter_livre.php'>ajouter un livre</a>";
?>

<?php include 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $stmt = $pdo->prepare("INSERT INTO items (nom) VALUES (?)");
    $stmt->execute([$nom]);
    echo "Ajout réussi.";
}
?>

<form method="POST">
    <input type="text" name="nom" placeholder="Nom">
    <button type="submit">Ajouter</button>
</form>

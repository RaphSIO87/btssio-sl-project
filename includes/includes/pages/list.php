<?php include 'config/database.php';

$stmt = $pdo->query("SELECT * FROM items");
echo "<ul>";
while ($row = $stmt->fetch()) {
    echo "<li>{$row['nom']}</li>";
}
echo "</ul>";
?>

<?php
// Connexion à la base de données
include 'db_connexion.php';

// Récupérer les données des utilisateurs
$sql_users = "SELECT * FROM Users";
$result_users = $conn->query($sql_users);

echo "<h1>Users</h1>";
if ($result_users->num_rows > 0) {
    while($row = $result_users->fetch_assoc()) {
        echo "id_user: " . $row["id_user"]. " - Nom: " . $row["nom"]. " - Prénoms: " . $row["prenoms"]. " - Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

// Récupérer les données des transactions
$sql_transactions = "SELECT * FROM Transactions";
$result_transactions = $conn->query($sql_transactions);

echo "<h1>Transactions</h1>";
if ($result_transactions->num_rows > 0) {
    while($row = $result_transactions->fetch_assoc()) {
        echo "id_trx: " . $row["id_trx"]. " - Amount: " . $row["amount"]. " - Status: " . $row["statut"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

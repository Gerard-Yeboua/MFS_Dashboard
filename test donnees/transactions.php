<?php
header('Content-Type: application/json');

// Connexion à la base de données
 include "db_connexion.php";    

// Requête SQL pour récupérer les données de transactions
$sql = "SELECT month, transactions, earnings, errors FROM transactions";
$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

echo json_encode($data);
?>

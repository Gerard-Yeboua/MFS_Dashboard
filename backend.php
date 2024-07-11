<?php
// backend.php
header('Content-Type: application/json');

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

// Connectez-vous à votre base de données et récupérez les données filtrées
// $pdo = new PDO(...);

$query = $pdo->prepare("SELECT * FROM your_table WHERE date BETWEEN :start_date AND :end_date");
$query->execute(['start_date' => $start_date, 'end_date' => $end_date]);

$data = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);
?>

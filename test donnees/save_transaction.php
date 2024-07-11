<?php
// Connexion à la base de données
include 'db_connexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $amount = $_POST['amount'];
    $sender_MSISDN = $_POST['sender_MSISDN'];
    $receiver_MSISDN = $_POST['receiver_MSISDN'];
    $reference = $_POST['reference'];
    $motif_trx = $_POST['motif_trx'];
    $statut = $_POST['statut'];
    $id_user = $_POST['id_user'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO Transactions (amount, sender_MSISDN, receiver_MSISDN, reference, motif_trx, statut, id_user) 
            VALUES ('$amount', '$sender_MSISDN', '$receiver_MSISDN', '$reference', '$motif_trx', '$statut', '$id_user')";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers le formulaire après succès
        header("Location: form_transactions.php");
        exit(); // Assurez-vous de sortir après la redirection
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>

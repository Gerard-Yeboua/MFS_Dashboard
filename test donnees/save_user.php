<?php
// Connexion à la base de données
include 'db_connexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenoms = $_POST['prenoms'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hasher le mot de passe pour plus de sécurité

    // Insérer les données dans la base de données
    $sql = "INSERT INTO Users (nom, prenoms, email, password) 
            VALUES ('$nom', '$prenoms', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers le formulaire après succès
        header("Location: form_user.php");
        exit(); // Assurez-vous de sortir après la redirection
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>

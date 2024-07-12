<?php
// Connexion à la base de données
include 'db_connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Utilisateurs et Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Utilisateurs</h1>
        <?php
        // Récupérer les données des utilisateurs
        $sql_users = "SELECT * FROM Users";
        $result_users = $conn->query($sql_users);

        if ($result_users->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>ID</th><th>Nom</th><th>Prénoms</th><th>Username</th><th>Email</th></tr></thead>";
            echo "<tbody>";
            while($row = $result_users->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_user"] . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenoms"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Aucun résultat trouvé</p>";
        }
        ?>

        <h1 class="mt-5 mb-4">Transactions</h1>
        <?php
        // Récupérer les données des transactions avec les noms des utilisateurs, triées par id_trx
        $sql_transactions = "SELECT t.id_trx, t.amount, t.sender_MSISDN, t.receiver_MSISDN, t.reference, t.motif_trx, t.statut, t.id_user, u.nom, u.prenoms, t.created_at
                             FROM Transactions t 
                             JOIN Users u ON t.id_user = u.id_user
                             ORDER BY t.id_trx ASC";
        $result_transactions = $conn->query($sql_transactions);

        if ($result_transactions->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>ID</th><th>Montant</th><th>Numéro Expéditeur</th><th>Numéro Destinataire</th><th>Référence</th><th>Motif</th><th>Statut</th><th>ID Utilisateur</th><th>Nom Utilisateur</th><th>Prénoms Utilisateur</th><th>Date de transaction</th></tr></thead>";
            echo "<tbody>";
            while($row = $result_transactions->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_trx"] . "</td>";
                echo "<td>" . $row["amount"] . "</td>";
                echo "<td>" . $row["sender_MSISDN"] . "</td>";
                echo "<td>" . $row["receiver_MSISDN"] . "</td>";
                echo "<td>" . $row["reference"] . "</td>";
                echo "<td>" . $row["motif_trx"] . "</td>";
                echo "<td>" . $row["statut"] . "</td>";
                echo "<td>" . $row["id_user"] . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenoms"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>Aucun résultat trouvé</p>";
        }

        // Fermer la connexion
        $conn->close();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer une Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Enregistrer une Transaction</h1>
        <form action="save_transaction.php" method="post">
            <div class="mb-3">
                <label for="amount" class="form-label">Montant:</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="mb-3">
                <label for="sender_MSISDN" class="form-label">Numéro de l'expéditeur:</label>
                <input type="text" class="form-control" id="sender_MSISDN" name="sender_MSISDN" required>
            </div>
            <div class="mb-3">
                <label for="receiver_MSISDN" class="form-label">Numéro du destinataire:</label>
                <input type="text" class="form-control" id="receiver_MSISDN" name="receiver_MSISDN" required>
            </div>
            <div class="mb-3">
                <label for="reference" class="form-label">Référence:</label>
                <input type="text" class="form-control" id="reference" name="reference" required>
            </div>
            <div class="mb-3">
                <label for="motif_trx" class="form-label">Motif:</label>
                <input type="text" class="form-control" id="motif_trx" name="motif_trx" required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut:</label>
                <select class="form-select" id="statut" name="statut" required>
                    <option value="success">Success</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_user" class="form-label">ID Utilisateur:</label>
                <input type="number" class="form-control" id="id_user" name="id_user" required>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

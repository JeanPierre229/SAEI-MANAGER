<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.kkiapay.me/k.js"></script>
</head>
<body>
    <form action="start.php" method="post" class="formulaire">
        <label for="montant" class="form-label">Entrer votre montant:</label>
        <input type="number" name="montant" id="montant" required>
        <button type="submit" class="btn btn-primary">ENVOYER</button>
    </form>
</body>
</html>
<script>
    let formulaire = document.querySelector(".formulaire")
    formulaire.onsubmit = function (e) {
        e.preventDefault();
        openKkiapayWidget({
        amount:formulaire.montant.value, 
        position: "right", 
        callback: "http://localhost:80/SAEI-MANAGER/start.php", 
        data: "Test de paiement",
        theme: "#092374",
        sandbox: "true",
        key: "ea194080f5a011ee9f805f907fefa779"
        })
    }
</script>

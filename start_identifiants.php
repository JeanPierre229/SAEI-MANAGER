<!-- Vérification du mail, connexion à la base de donnée et envoie du mail de confirmation -->
<?php
session_start();

$nomStructure = $typeStructure = $pays = $ville = $adresse = $contact = $site = $phase = $annee = $program = null;
$cohortes = $coach = $learn = $error = $mail = $motDePasse = $motDePasse1 = null;
$_SESSION['id'] = null;
function check($donnee){
    $donnee = trim($donnee);
    $donnee = stripslashes($donnee);
    $donnee = htmlentities($donnee);
    return $donnee;
}

if (!empty($_POST['mail']) && !empty($_POST['motDePasse']) && !empty($_POST['motDePasse1'])) {
    $mail = check($_POST['mail']);
    $nomStructure = check($_POST['nom_structure']);
    $typeStructure = check($_POST['type_structure']);
    $pays = check($_POST['pays']);
    $ville = check($_POST['ville']);
    $adresse = check($_POST['adress']);
    $contact = check($_POST['contact']);
    $site = check($_POST['site']);
    $phase = check($_POST['phase']);
    $annee = check($_POST['anneeActivite']);
    $program = isset($_POST['program']) ? check($_POST['program']) : "";
    $cohortes = isset($_POST['cohortes']) ? check($_POST['cohortes']) : "";
    $coach = isset($_POST['coach']) ? check($_POST['coach']) : "";
    $learn = isset($_POST['learn']) ? check($_POST['learn']) : "";
    $motDePasse = sha1(check($_POST['motDePasse']));
    $motDePasse1 = sha1(check($_POST['motDePasse1']));
    $nombreEquipier = check($_POST['equipier']);

    if ($motDePasse == $motDePasse1) {
        $cle = rand(100000, 900000);
        require 'ConnectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("SELECT mail FROM users_saei WHERE mail = ?;");
        $requete->execute(array($mail));

        if($requete->rowCount() > 0){
            $error = "E-mail existant. Veuillez le changer svp...";
        }else{
            $requete2 = $connect->prepare("
                    INSERT INTO users_saei(nomStructure, typeStructure, pays, ville, adresse, contact, site, phaseAccompagnement, anneeActivite, program, cohortes, coach, learn, cle, mail, motDePasse, nombreEquipier)
                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            $requete2->execute(array($nomStructure, $typeStructure, $pays, $ville, $adresse, $contact, $site, $phase, $annee, $program, $cohortes, $coach, $learn, $cle, $mail, $motDePasse, $nombreEquipier));
            header("Location: confirm_mail.php?mail=$mail");
        }
        
    } else {
        $error = "Mot de passe non identique ! Réessayez...";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBUTER -- SAEI-MANAGER</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Lien icone SAEI-MANAGER -->
    <link rel="icon" href="assets/images/logo/logo-icon.png">
</head>
<style>
    a {
        color: black;
        text-decoration: none;
    }
    .btn-orange {
        background-color: #F76300;
        color: white;
    }
    .btn-green {
        background-color: #00A65A;
        color: white;
    }
    .btn-green:hover {
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover {
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange {
        color: #F76300;
    }
    .text-green {
        color: #00A65A;
    }
    .bg-green {
        background-color: #00A65A;
    }
    .border-bottom-orange {
        border-bottom: 2px solid #F76300;
    }
    .border-orange {
        border: 2px solid #F76300;
    }
    .bg-select {
        background-color: #FFFAFA;
    }
    .bg-gray {
        background-color: #D9D9D9;
    }
    .d-meme-icone {
        width: 45px;
        height: 45px;
    }
    .cursor {
        cursor: pointer;
    }
    .cadrant-index {
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green {
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify {
        text-align: justify;
    }
    .hideElement {
        display: none;
    }
    body{
        background-image: url('assets/images/program-img.jpg');
        background-size: cover;
    }
    .rounded-start-left-1{
        border-top-left-radius: 100px;
    }
    .rounded-end-right-1{
        border-bottom-right-radius: 100px;
    }
    .centre{
        width: 700px;
        height: 100%vh;
        display: block;
        align-items: center;
        justify-content: center;
    }
</style>
<body class="p-5">
    <section class="container centre shadow my-5 bg-light rounded-start-left-1 rounded-end-right-1 p-5">
        <div class="row">
            <form action="start_identifiants.php" method="post" id="formulaire">
                <legend class="text-center">CREER VOS IDENTIFIANTS DE CONNEXION</legend>
                <?php if (isset($error)): ?>
                    <p class="alert alert-danger">
                        <?= $error ?>
                    </p>
                <?php endif ?>
                <div class="row hideElement">
                    <div class="my-3">
                        <label for="nom_structure" class="form-label">Nom de la structure: </label>
                        <input type="text" name="nom_structure" value="<?= $_POST['nom_structure'] ?? '' ?>" id="nom_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="type_structure" class="form-label">Type de la structure: </label>
                        <input type="text" name="type_structure" value="<?= $_POST['type_structure'] ?? '' ?>" id="type_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="pays" class="form-label">Pays: </label>
                        <input type="text" name="pays" value="<?= $_POST['pays'] ?? '' ?>" id="pays" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="ville" class="form-label">Ville: </label>
                        <input type="text" name="ville" value="<?= $_POST['ville'] ?? '' ?>" id="ville" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="adress" class="form-label">Adresse: </label>
                        <input type="text" name="adress" value="<?= $_POST['adress'] ?? '' ?>" id="adress" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="contact" class="form-label">Contact: </label>
                        <input type="tel" name="contact" value="<?= $_POST['contact'] ?? '' ?>" id="contact" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="site" class="form-label">Site Internet: </label>
                        <input type="text" name="site" value="<?= $_POST['site'] ?? '' ?>" id="site" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="anneeActivite" class="form-label">Année d'Activité(s): </label>
                        <input type="text" name="anneeActivite" value="<?= $_POST['anneeActivite'] ?? '' ?>" id="anneeActivite" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="phase" class="form-label">Phase d'Accompagnement: </label>
                        <input type="text" name="phase" value="<?= $_POST['phase'] ?? '' ?>" id="phase" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="program" class="form-label">Programme: </label>
                        <input type="text" name="program" value="<?= $_POST['program'] ?? '' ?>" id="program" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="cohortes" class="form-label">Cohortes: </label>
                        <input type="text" name="cohortes" value="<?= $_POST['cohortes'] ?? '' ?>" id="cohortes" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="coach" class="form-label">Coach: </label>
                        <input type="text" name="coach" value="<?= $_POST['coach'] ?? '' ?>" id="coach" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="learn" class="form-label">Learn: </label>
                        <input type="text" name="learn" value="<?= $_POST['learn'] ?? '' ?>" id="learn" class="form-control border border-dark">
                    </div>
                    <?php
                        if(!empty($_POST['equipier']) && isset($_POST['equipier'])){
                            $nombreEquipier = $_POST['equipier'];
                    ?>
                    <div class="my-3">
                        <input type="number" name="equipier" id="equipier" value="<?= $_POST['equipier'] ?>">
                    </div>
                    <?php }else{ ?>
                        <div class="my-3">
                            <input type="number" name="equipier" id="equipier" value="0">
                        </div>
                    <?php } ?>
                </div>
                <div class="my-3">
                    <label for="mail" class="form-label">Mail: </label>
                    <input type="email" name="mail" id="mail" class="bg-light form-control border border-dark" required>
                </div>
                <div class="my-3">
                    <label for="motDePasse" class="form-label">Mot De Passe: </label>
                    <input type="password" name="motDePasse" id="motDePasse" class="bg-light form-control border border-dark" required>
                </div>
                <div class="my-3">
                    <label for="motDePasse1" class="form-label">Confirmer le mot de passe: </label>
                    <input type="password" name="motDePasse1" id="motDePasse1" class="bg-light form-control border border-dark" required>
                </div>
                <div class="mt-5 text-end">
                    <button class="btn btn-green rounded-3 px-4">CREER</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

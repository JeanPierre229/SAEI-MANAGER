<!DOCTYPE html>
<html lang="en">
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
    a{
        color: black;
        text-decoration: none;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .btn-green{
        background-color: #00A65A;
        color: white;
    }
    .btn-green:hover{
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover{
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange{
        color: #F76300;
    }
    .text-green{
        color: #00A65A;
    }
    .bg-green{
        background-color: #00A65A;
    }
    .border-bottom-orange{
        border-bottom: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .bg-select{
        background-color: #FFFAFA;
    }
    .bg-gray{
        background-color: #D9D9D9;
    }
    .d-meme-icone{
        width: 45px;
        height: 45px;
    }
    .cursor{
        cursor: pointer;
    }
    .cadrant-index{
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green{
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify{
        text-align: justify;
    }
    .hideElement{
        display: none;
    }
    body{
        background-image: url('assets/images/program-img.jpg');
        background-size: cover;
    }
    .rounded-start-left{
        border-top-left-radius: 150px;
    }
    .rounded-end-right{
        border-bottom-right-radius: 150px;
    }
    .rounded-start-left-1{
        border-top-left-radius: 100px;
    }
    .rounded-end-right-1{
        border-bottom-right-radius: 100px;
    }
    .centre{
        width: 800px;
        height: 100%vh;
        display: block;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    <section class="container centre shadow my-5 bg-light rounded-start-left-1 rounded-end-right-1 p-5">
        <div class="row">
            <div class="col-12 bg-gray px-4 py-1 rounded-start-left rounded-end-right">
                <div class="row">
                    <div class="col-12 bg-green p-2 rounded-start-left rounded-end-right"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-5">
                <h3>VOUS ETES PRESQU'A LA FIN</h3>
            </div>
        </div>
        <div class="row">
            <form action="start_identifiants.php" method="post" id="formulaire">
                <legend>Fonctionnalités souhaitées: </legend>
                <div class="row hideElement">
                    <div class="my-3">
                        <label for="nom_structure" class="form-label">Nom de la structure: </label>
                        <input type="text" name="nom_structure" value="<?= $_POST['nom_structure'] ?>" id="nom_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="type_structure" class="form-label">Type de la structure: </label>
                        <input type="text" name="type_structure" value="<?= $_POST['type_structure'] ?>" id="type_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="pays" class="form-label">Pays: </label>
                        <input type="text" name="pays" value="<?= $_POST['pays'] ?>" id="pays" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="ville" class="form-label">Ville: </label>
                        <input type="text" name="ville" value="<?= $_POST['ville'] ?>" id="ville" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="adress" class="form-label">Adresse: </label>
                        <input type="text" name="adress" value="<?= $_POST['adress'] ?>" id="adress" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="contact" class="form-label">Contact: </label>
                        <input type="tel" name="contact" value="<?= $_POST['contact'] ?>" id="contact" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="site" class="form-label">Site Internet: </label>
                        <input type="text" name="site" value="<?= $_POST['site'] ?>" id="site" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="anneeActivite" class="form-label">Anne d'Activité(s): </label>
                        <input type="text" name="anneeActivite" value="<?= $_POST['anneeActivite'] ?>" id="anneeActivite" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="phase" class="form-label">Phase d'Accompagnement: </label>
                        <input type="text" name="phase" value="<?= $_POST['phase'] ?>" id="phase" class="form-control border border-dark">
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
                <div class="row">
                    <div class="col mt-3 me-5">
                        <input type="checkbox" value="program" name="program" id="fonction" class="border border-dark p-3">
                        <label for="program" class="form-label">PROGRAMME D'ACCOMPAGNEMENT </label>
                    </div>
                    <div class="col mt-3 me-5">
                        <input type="checkbox" value="cohortes" name="cohortes" id="fonction" class="border border-dark">
                        <label for="cohortes" class="form-label">GESTION DES COHORTES </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3 me-5">
                        <input type="checkbox" value="coach" name="coach" id="fonction" class="border border-dark p-3">
                        <label for="coach" class="form-label">GESTION DES COACH </label>
                    </div>
                    <div class="col mt-3 me-5">
                        <input type="checkbox" value="learn" name="learn" id="fonction" class="border border-dark">
                        <label for="learn" class="form-label">LEARN </label>
                    </div>
                </div>
                <div class="mt-5 text-end">
                    <button type="submit" class="btn btn-green rounded-3 px-4">TERMINER</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
<script>
    const formulaire = document.getElementById('formulaire');
    formulaire.addEventListener('submit', function(event) {
        const checkboxes = document.querySelectorAll('input[id="fonction"]');
        let checkedOne = false;

        for (const checkbox of checkboxes) {
            if (checkbox.checked) {
                checkedOne = true;
                break;
            }
        }

        if (!checkedOne) {
            event.preventDefault();
            alert('Vous devez sélectionner au moins une option.');
        }
    });
</script>
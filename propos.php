<?php 
    session_start();
    $active = "propos";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A PROPOS -- SAEI-MANAGER</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Lien icone WSA -->
    <link rel="icon" href="assets/images/logo/logo-icon.png">
</head>
<body>
    <!-- DEBUT PARTIE: HEADER -->
    <?php require 'header.php'; ?>
    <br><br><br><br>
    <!-- FIN PARTIE: HEADER -->

    <!-- DEBUT TEXT INTRODUCTIF FONCTIONNALITES -->
    <div class="container my-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="">LOREM IPSUM DOOR SIT <span class="bg-green py-2 pe-5">AMET.</span></h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col text-center">
                <p class="w-50 mx-auto my-3">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
            </div>
        </div>
    </div>
    <!-- FIN TEXT INTRODUCTIF FONCTIONNALITES -->

    <!-- DEBUT PARTIE: A PROPOS -->
     <section class="container">
        <div class="row">
            <div class="col">
                <img src="assets/images/dn.jpg" alt="L'IMAGE DU DN" class="img-fluid w-75">
            </div>
            <div class="col">
                <h3 class="mt-3">LOREM IPSUM DOLOR SIT AMET.</h3>
                <p class="text-secondary my-3">Lorem ipsum dolor sit amet...</p>
                <p class="text-justify">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum mollitia vero laudantium qui! Facilis dignissimos ea deserunt ut ipsa dolore ducimus iure laborum perferendis modi.
                </p>
                <p class="mt-3">
                    <img src="assets/images/leadership.jpg" alt="Une Image de LeaderShip" class="img-fluid col-12">
                </p>
            </div>
        </div>
     </section>
    <!-- FIN PARTIE: A PROPOS -->

    <!-- DEBUT PARTIE: CONTACT -->
     <section class="container my-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>CONTACTEZ-NOUS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center my-4">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, iste mollitia similique quibusdam ipsum quaerat nesciunt alias saepe doloremque? Sapiente, ipsum! Quo optio error explicabo!
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-orange" onclick="cacherContact()">Contactez-Nous</button>
            </div>
        </div>
        <section id="contact-us" class="container my-4">
            <form action="envoiMailContact.php" method="post">
                <?php if(isset($_SESSION['error'])){ ?>
                    <div class="col">
                        <p class="alert alert-danger">
                            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </p>
                    </div>
                <?php }elseif(isset($_SESSION['success'])){ ?>
                    <div class="col">
                        <p class="alert alert-success col-3">
                            <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                        </p>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col">
                        <input type="text" name="nom" id="nom" class="form-control py-3" placeholder="NOM: JOHN DOE" required>
                    </div>
                    <div class="col">
                        <input type="text" name="sujet" id="sujet" class="form-control py-3" placeholder="SUJET: PRISE DE CONTACT" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <input type="email" name="mail" id="mail" class="form-control py-3" placeholder="MAIL: john.doe@gmail.com" required>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <textarea name="message" id="message" class="form-control" placeholder="MESSAGE A ENVOYE" cols="30" rows="5" required></textarea>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col text-end">
                        <button class="btn btn-orange">ENVOYER</button>
                    </div>
                </div>
            </form>
        </section>
     </section>
    <!-- FIN PARTIE: CONTACT -->

    <!-- DEBUT PARTIE: FOOTER -->
    <?php require 'footer.php'; ?>
    <!-- FIN PARTIE: FOOTER -->
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion -- SAEI-MANAGER</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo/logo-icon.png">

    <!-- page css -->
     <link rel="stylesheet" href="style.css">

    <!-- Lien icone WSA -->
    <link rel="icon" href="images/logo.png">

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<style>
    .back-color{
        background-color: #F76300;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .text-orange{
        color: #F76300;
    }
    .text-green{
        color: #00A65A;
    }
    .btn:hover{
        border: 2px solid #F76300;
        color: #F76300;
        background-color: transparent;
        font-weight: bold;
    }
</style>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-4 d-none d-lg-flex bg" style="background-image:url('assets/images/ins.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                            <img src="assets/images/logo/logo-smw.png" class="w-50" alt="">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">SAEI-MANAGER</h1>
                            <p class="text-white font-size-16 lh-2 w-80 opacity-08">Transformez votre gestion entrepreneuriale avec notre plateforme innovante et efficace.
                            </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© 2024 SAEI-ManagerTheme</span>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-white text-link" href="">Legal</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-white text-link" href="">Privé</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h2 class="m-t-20">Connectez-Vous</h2>
                                <p class="m-b-30">Entrer vos identifiants pour vous connecter</p>
                                <form action="traitementConnexion.php" method="post">
                                    <?php if(isset($_SESSION['error'])): ?>
                                        <p class="alert alert-danger">
                                            <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                                        </p>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="mail">Mail:</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-mail"></i>
                                            <input type="email" name="mail" class="form-control" id="mail" placeholder="Mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="password">Mot de passe:</label>
                                        <a class="float-right font-size-13 text-muted" href="">Mot de passe oublié?</a>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" name="motDePasse" class="form-control" id="password" placeholder="Mot de Passe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="font-size-13 text-muted">
                                                Vous n'avez pas encore de compte? 
                                                <a class="small" href="tarifs.php"> Démarrer</a>
                                            </span>
                                            <button class="btn btn-orange">Connexion</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
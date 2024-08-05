<?php 
    session_start();
    $theme = $type = $dureeParcours = $frequence = $dureeSeance = $nombreCoach = $nombreIncube = $nombreJours = null;

    if(!empty($_POST) && isset($_POST)){
        $theme = check($_POST['theme']);
        $type = $_POST['type'];
        $dureeParcours = $_POST['dureeParcours'];
        $frequence = $_POST['frequence'];
        $dureeSeance = $_POST['dureeSeance'];
        $nombreCoach = $_POST['nombreCoach'];
        $nombreIncube = $_POST['nombreIncube'];
        $nombreJours = $_POST['nombreJours'];

        require 'connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("INSERT INTO coachingindividuel(type, theme, dureeParcours, frequence, dureeSeance, nombreCoach, nombreIncube, nombreJours) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->execute([$type, $theme, $dureeParcours, $frequence, $dureeSeance, $nombreCoach, $nombreIncube, $nombreJours]);
        header("Location: parcours.php");
    }

    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlspecialchars($donnee);
        return $donnee;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Coaching Individuel | SAEI-MANAGER</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo-icon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <?php if(!empty($_SESSION)){ ?>
                <?php require 'headerSAEI.php'; ?>
            <?php }else{ header('Location: connexion.php'); } ?>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <?php require 'side_nav.php'; ?>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Coaching Individuel</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="dashboardSAEI.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="#">Cohortes</a>
                                <a class="breadcrumb-item" href="activer-parcours.php">Activer un Parcours</a>
                                <span class="breadcrumb-item active">Coaching Individuel</span>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto bg-white" style="padding: 30px;">
                            <div class="d-flex">
                                <h4>Coaching Individuel</h4>
                            </div>
                            <form action="#" method="post">
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="theme" class="form-label">Thème: </label>
                                        <input type="text" name="theme" id="theme" class="form-control" placeholder="Ex: Agriculture" required>
                                    </div>
                                    <div class="col">
                                        <label for="type" class="form-label">Type: </label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                            <option value="Mixte">Mixte</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="dureeParcours" class="form-label">Durée du Parcours: </label>
                                        <select name="dureeParcours" id="dureeParcours" class="form-control">
                                            <option value="3mois">3mois</option>
                                            <option value="4mois">4mois</option>
                                            <option value="5mois">5mois</option>
                                            <option value="6mois">6mois</option>
                                            <option value="1an">1an</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="frequence" class="form-label">Frequence: </label>
                                        <select name="frequence" id="frequence" class="form-control">
                                            <option value="Hebdomadaire">Hebdomadaire</option>
                                            <option value="Quinzaine">Quinzaine</option>
                                            <option value="Mensuel">Mensuel</option>
                                            <option value="Semestriel">Semestriel</option>
                                            <option value="Trimestriel">Trimestriel</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="dureeSeance" class="form-label">Durée des Séances: </label>
                                        <select name="dureeSeance" id="dureeSeance" class="form-control">
                                            <option value="1">1h</option>
                                            <option value="2">2h</option>
                                            <option value="3">3h</option>
                                            <option value="4">4h</option>
                                            <option value="5">5h</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <label for="nombreCoach" class="form-label">Nombre de coach(s): </label>
                                        <input type="number" class="form-control" min="1" name="nombreCoach" id="nombreCoach" required>
                                    </div>
                                    <div class="col">
                                        <label for="nombreIncube" class="form-label">Nombre d'Incubé(s): </label>
                                        <input type="number" class="form-control" min="1" name="nombreIncube" id="nombreIncube" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="nombreJours" class="form-label">Nombre de Jours: </label>
                                        <select name="nombreJours" id="nombreJours" class="form-control">
                                            <option value="1">1jours / 7</option>
                                            <option value="2">2jours / 7</option>
                                            <option value="3">3jours / 7</option>
                                            <option value="4">4jours / 7</option>
                                            <option value="5">5jours / 7</option>
                                            <option value="6">6jours / 7</option>
                                            <option value="7">7jours / 7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mx-auto">
                                    <button class="btn btn-orange col-12">Activer</button>
                                </div>
                            </form>
                        </div>
                    </div>     
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2024 Theme_Nate. Tout droits réservés.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5> 
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/js/pages/profile.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
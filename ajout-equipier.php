<?php 
    session_start();
    $nomstructure = $_SESSION['nom_structure'];
    require 'connectDB.php';
    $connect = DataBase::connect();
    if(!empty($_POST) && isset($_POST)){
        $nom = check($_POST['nom']);
        $prenom = check($_POST['prenom']);
        $adresse = check($_POST['adresse']);
        $domaine = check($_POST['domaine']);
        $requete0 = $connect->query('SELECT * FROM equipier;');
        $taille = $requete0->rowCount();
        $requetes = $connect->query("SELECT nombreEquipier FROM users_saei WHERE nomStructure ='$nomstructure' ;");
        $nombreEquipier = $requetes->fetch();
        if($taille - $nombreEquipier['nombreEquipier'] == 0){
            //DO NOTHING
        }else{
            $requete = $connect->prepare("INSERT INTO equipier(nomEquipier, prenomEquipier, adresseEquipier, domaine)
                                    VALUES(?, ?, ?, ?)");
            $requete->execute(array($nom, $prenom, $adresse, $domaine));
        }
        
    }
    // Nombre d'équipier à ajouter
    $requete1 = $connect->query('SELECT * FROM equipier;');
    $taille = $requete1->rowCount();
    $requete2 = $connect->query("SELECT nombreEquipier FROM users_saei WHERE nomStructure ='$nomstructure' ;");
    $nombreEquipier = $requete2->fetch();

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
    <title>Ajouter un Equipier | SAEI-MANAGER</title>

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
                    <div class="page-header no-gutters">
                        <div class="row align-items-md-center">
                            <div class="col-md-5">
                                <div class="media m-v-10">
                                    <div class="avatar avatar-cyan avatar-icon avatar-square">
                                        <i class="anticon anticon-star"></i>
                                    </div>
                                    <div class="media-body m-l-15">
                                        <?php
                                            
                                        ?>
                                        <h6 class="mb-0">Vos Equipiers (<?= $nombreEquipier['nombreEquipier'] ?>)</h6>
                                        <span class="text-gray font-size-13">L'équipe de choc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex mx-3">
                                <div class="media align-items-center m-r-40 m-v-5">
                                    <div class="font-size-27">
                                        <i class="text-primary anticon anticon-team"></i>
                                    </div>
                                    <div class="d-flex align-items-center m-l-10">
                                        <h2 class="m-b-0 m-r-5"><?= $nombreEquipier['nombreEquipier'] ?></h2>
                                        <span class="text-gray">Equipier(s)</span>
                                    </div>
                                </div>
                                <div class="media align-items-center m-r-40 m-v-5">
                                    <div class="font-size-27">
                                        <i class="text-success  anticon anticon-plus-circle"></i>
                                    </div>
                                    <div class="d-flex align-items-center m-l-10">
                                        <h2 class="m-b-0 m-r-5"><?= $taille ?></h2>
                                        <span class="text-gray">Ajouté(s)</span>
                                    </div>
                                </div>
                                <div class="media align-items-center m-v-5">
                                    <div class="font-size-27">
                                        <i class="text-danger anticon anticon-team"></i>
                                    </div>
                                    <div class="d-flex align-items-center m-l-10">
                                        <h2 class="m-b-0 m-r-5"><?php echo $nombreEquipier['nombreEquipier'] - $taille ?></h2>
                                        <span class="text-gray">Restant(s)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <a href="planification.php">
                                    <button class="btn btn-orange">Planifier</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto bg-white" style="padding: 30px;">
                            <?php if($nombreEquipier['nombreEquipier'] - $taille != 0){ ?>
                            <form action="ajout-equipier.php" method="post">
                                <legend class="h3">Ajouter un Equipier</legend>
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <label for="nom" class="form-label">Nom : </label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Ex: HOUNDEALO" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prenom" class="form-label">Prénom(s) : </label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Ex: Jean Pierre" required>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="adresse" class="form-label">Adresse : </label>
                                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Ex: Parakou Banikanni" required>
                                </div>
                                <div class="mt-3">
                                    <label for="domaine" class="form-label">Domaine : </label>
                                    <select name="domaine" id="domaine" class="form-control">
                                        <option value="Numérique">Numérique</option>
                                        <option value="Art">Art</option>
                                        <option value="Culture">Culture</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Audio-Visuel">Audio-Visuel</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary form-control text-white" <?php if(($nombreEquipier['nombreEquipier'] - $taille) == 0){ ?> disabled <?php }else{} ?>>Ajouter</button>
                                </div>
                            </form>
                            <?php }elseif($nombreEquipier['nombreEquipier'] - $taille == 0){ ?>
                                <p class="alert alert-success text-center">Vous avez atteind le nombre d'équipier disponible</p>
                            <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
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
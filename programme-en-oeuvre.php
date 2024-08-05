<?php 
    session_start();
    $nomstructure = $_SESSION['nom_structure'];
    require 'connectDB.php';
    $connect = DataBase::connect();
    // Nombre d'équipier à ajouter
    $requete1 = $connect->query('SELECT * FROM equipier;');
    $taille = $requete1->rowCount();
    $requete2 = $connect->query("SELECT nombreEquipier FROM users_saei WHERE nomStructure ='$nomstructure' ;");
    $nombreEquipier = $requete2->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mise en oeuvre du programme | SAEI-MANAGER</title>

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
                                        <h6 class="mb-0">Vos Equipiers (7)</h6>
                                        <span class="text-gray font-size-13">L'équipe de choc</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex">
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
                                    <a href="ajout-equipier.php">
                                        <div class="font-size-27">
                                            <i class="text-success  anticon anticon-plus-circle"></i>
                                        </div>
                                    </a>
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
                            <div class="col-md-2">
                                <div class="text-md-right m-v-10">
                                    <div class="btn-group">
                                        <button id="list-view-btn" type="button" class="btn btn-default btn-icon">
                                            <i class="anticon anticon-ordered-list"></i>
                                        </button>
                                        <button id="card-view-btn" type="button" class="btn btn-default btn-icon active">
                                            <i class="anticon anticon-appstore"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <!-- Card View -->
                            <div class="row" id="card-view">
                                <?php
                                    $requete = $connect->prepare("SELECT * FROM equipier;");
                                    $requete->execute();

                                    if($requete->rowCount() == 0){
                                        echo '<p class="alert alert-success mx-auto text-center">🗣️ Vous n\'aviez pas encore d\'équipe </p>';
                                    }else{
                                        while($result = $requete->fetch()){
                                ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="m-t-20 text-center">
                                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <h4 class="m-t-30"><?php echo $result['nomEquipier']. '<br/>' .$result['prenomEquipier']; ?></h4>
                                                <p><?= $result['adresseEquipier'] ?></p>
                                            </div>
                                            <div class="text-center m-t-15">
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-facebook"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-twitter"></i>
                                                </button>
                                                <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                    <i class="anticon anticon-instagram"></i>
                                                </button>
                                            </div>
                                            <div class="text-center m-t-30">
                                                <a href="profile.html" class="btn btn-default btn-tone">
                                                    <i class="anticon anticon-mail"></i>
                                                    <span class="m-l-5">Contact</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }} ?>
                            </div>
                            <div class="row d-none" id="list-view">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Nom Prénoms</th>
                                                                <th>Adresse</th>
                                                                <th>Réseaux</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $requetenew = $connect->prepare("SELECT * FROM equipier;");
                                                                $requetenew->execute();
                            
                                                                if($requetenew->rowCount() == 0){
                                                                    echo '<p class="alert alert-success mx-auto text-center">🗣️ Vous n\'aviez pas encore d\'équipe </p>';
                                                                }else{
                                                                    while($result = $requetenew->fetch()){
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="media align-items-center">
                                                                        <div class="avatar avatar-image">
                                                                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="media-body m-l-15">
                                                                            <h6 class="mb-0"><?php echo $result['nomEquipier']. ' ' .$result['prenomEquipier']; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?= $result['adresseEquipier'] ?></td>
                                                                <td>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-facebook"></i>
                                                                    </button>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-twitter"></i>
                                                                    </button>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-instagram"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a href="profile.html" class="btn btn-default btn-tone">
                                                                        <i class="anticon anticon-mail"></i>
                                                                        <span class="m-l-5">Contact</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php }} ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
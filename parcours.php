<?php 
    session_start();
    require 'connectDB.php';
    $connect = DataBase::connect();
    $requete = $connect->prepare("SELECT * FROM parcours;");
    $requete->execute();
    $parcours = $requete->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parcours | SAEI-MANAGER</title>

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
                        <h2 class="header-title">Mon Parcours</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="dashboardSAEI.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="#">Cohortes</a>
                                <a class="breadcrumb-item" href="activer-parcours.php">Activer un Parcours</a>
                                <span class="breadcrumb-item active">Mon Parcours</span>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto bg-white" style="padding: 30px;">
                            <table class="table table-hover">
                                <thead>
                                    <tr style="font-size: 11px;">
                                        <th>Parcours</th>
                                        <th>Thème</th>
                                        <th>Type</th>
                                        <th>Durée de Parcours</th>
                                        <th>Fréquence</th>
                                        <th>Durée de Séance</th>
                                        <th>Coach(s)</th>
                                        <th>Incubé(s)</th>
                                        <th>Jours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($parcours['bootCamp'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM bootcamp;");
                                                $requete1->execute();
                                                $boot = $requete1->fetch();
                                            ?>
                                            <td>BootCamp de Rentré</td>
                                            <td><?= $boot['theme'] ?></td>
                                            <td><?= $boot['type'] ?></td>
                                            <td><?= $boot['dureeParcours'] ?></td>
                                            <td><?= $boot['frequence'] ?></td>
                                            <td><?= $boot['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $boot['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $boot['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $boot['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['coachingIndividuel'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM coachingindividuel;");
                                                $requete1->execute();
                                                $coachingindividuel = $requete1->fetch();
                                            ?>
                                            <td>Coaching Individuel</td>
                                            <td><?= $coachingindividuel['theme'] ?></td>
                                            <td><?= $coachingindividuel['type'] ?></td>
                                            <td><?= $coachingindividuel['dureeParcours'] ?></td>
                                            <td><?= $coachingindividuel['frequence'] ?></td>
                                            <td><?= $coachingindividuel['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $coachingindividuel['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $coachingindividuel['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $coachingindividuel['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['coachingCollectif'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM coachingcollectif;");
                                                $requete1->execute();
                                                $coachingcollectif = $requete1->fetch();
                                            ?>
                                            <td>Coaching Collectif</td>
                                            <td><?= $coachingcollectif['theme'] ?></td>
                                            <td><?= $coachingcollectif['type'] ?></td>
                                            <td><?= $coachingcollectif['dureeParcours'] ?></td>
                                            <td><?= $coachingcollectif['frequence'] ?></td>
                                            <td><?= $coachingcollectif['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $coachingcollectif['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $coachingcollectif['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $coachingcollectif['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['formation'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM formation;");
                                                $requete1->execute();
                                                $formation = $requete1->fetch();
                                            ?>
                                            <td>Formation</td>
                                            <td><?= $formation['theme'] ?></td>
                                            <td><?= $formation['type'] ?></td>
                                            <td><?= $formation['dureeParcours'] ?></td>
                                            <td><?= $formation['frequence'] ?></td>
                                            <td><?= $formation['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $formation['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $formation['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $formation['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['ceremonieFin'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM ceremoniefin;");
                                                $requete1->execute();
                                                $ceremoniefin = $requete1->fetch();
                                            ?>
                                            <td>Cérémonie de fin</td>
                                            <td><?= $ceremoniefin['theme'] ?></td>
                                            <td><?= $ceremoniefin['type'] ?></td>
                                            <td><?= $ceremoniefin['dureeParcours'] ?></td>
                                            <td><?= $ceremoniefin['frequence'] ?></td>
                                            <td><?= $ceremoniefin['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $ceremoniefin['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $ceremoniefin['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $ceremoniefin['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['mentorat'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM mentorat;");
                                                $requete1->execute();
                                                $mentorat = $requete1->fetch();
                                            ?>
                                            <td>Mentorat</td>
                                            <td><?= $mentorat['theme'] ?></td>
                                            <td><?= $mentorat['type'] ?></td>
                                            <td><?= $mentorat['dureeParcours'] ?></td>
                                            <td><?= $mentorat['frequence'] ?></td>
                                            <td><?= $mentorat['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $mentorat['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $mentorat['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $mentorat['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                    <?php if(isset($parcours['demoday'])): ?>
                                        <tr style="font-size: 11px;">
                                            <?php
                                                $requete1 = $connect->prepare("SELECT * FROM demoday;");
                                                $requete1->execute();
                                                $demoday = $requete1->fetch();
                                            ?>
                                            <td>Demo Day</td>
                                            <td><?= $demoday['theme'] ?></td>
                                            <td><?= $demoday['type'] ?></td>
                                            <td><?= $demoday['dureeParcours'] ?></td>
                                            <td><?= $demoday['frequence'] ?></td>
                                            <td><?= $demoday['dureeSeance'] ?> Heure(s)</td>
                                            <td><?= $demoday['nombreCoach'] ?> coach(s)</td>
                                            <td><?= $demoday['nombreIncube'] ?> incubé(s)</td>
                                            <td><?= $demoday['nombreJours'] ?> jours / 7</td>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
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
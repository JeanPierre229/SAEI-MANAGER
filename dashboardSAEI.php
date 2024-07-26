<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard SAEI | SAEI-MANAGER</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo-icon.png">

    <!-- page css -->
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">


</head>
<style>
    /* .card{
        border: 0;
    }
    .bg-dark{
        background-color: #000;
    } */
</style>
<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <?php if(!empty($_SESSION['nom_structure'])){ ?>
                <?php require 'headerSAEI.php'; ?>
            <?php }else{header("Location: connexion.php");}?>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <?php require 'side_nav.php'; ?>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header no-gutters">
                        <div class="d-md-flex align-items-md-center justify-content-between">
                            <div class="media m-v-10 align-items-center">
                                <div class="avatar avatar-image avatar-lg">
                                    <img src="assets/images/avatars/default-img1.png" alt="">
                                </div>
                                <div class="media-body m-l-15">
                                    <h4 class="m-b-0">Bienvenue à vous <?= $_SESSION['nom_structure'] ?> !</h4>
                                    <span class="text-gray">Structure d'Accompagnement à l'Entrepreneuriat Innovant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-solution"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de programmes</h6>
                                            <?php 
                                                require 'connectDB.php';
                                                $connect = DataBase::connect();
                                                $requete = $connect->prepare('SELECT * FROM program_elaborer;');
                                                $requete->execute();
                                                $taille = $requete->rowCount();
                                            ?>
                                            <p class="m-b-0 text-muted"><?= $taille ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-usergroup-add"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de coachs</h6>
                                            <p class="m-b-0 text-muted">11</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-usergroup-add"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de cohortes</h6>
                                            <p class="m-b-0 text-muted">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-dollar"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de dossiers financiers</h6>
                                            <p class="m-b-0 text-muted">7</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-read"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de ressources coach</h6>
                                            <p class="m-b-0 text-muted">18</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-read"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h6 class="m-b-0">Nombre de ressources incubé</h6>
                                            <p class="m-b-0 text-muted">25</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Programmes</h5>
                                        <div>
                                            <a href="list-program.php" class="btn btn-default btn-sm">Voir Tout</a> 
                                        </div>
                                    </div>
                                    <div class="table-responsive m-t-30">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nom du programme</th>
                                                    <th>Date</th>
                                                    <th>Catégorie(s)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $requete1 = $connect->prepare("SELECT * FROM program_elaborer ORDER BY id DESC;");
                                                    $requete1->execute();
                                                    $compteur = 0;
                                                    while($program = $requete1->fetch()){
                                                        $compteur++;
                                                        if($compteur == 4){
                                                            break;
                                                        }
                                                ?>
                                                <tr>
                                                    <td>
                                                        #<?= $program['id'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image avatar-sm m-r-10">
                                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-b-0"><?= $program['titre'] ?></h6>
                                                        </div>
                                                    </td>
                                                    <td><?= $program['dateProgram'] ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="badge badge-success badge-dot m-r-10"></div>
                                                            <div><?= $program['categorie'] ?></div>
                                                        </div>
                                                    </td>
                                                    <?php if($program['type'] == "modele" || $program['type'] == "vierge"){ ?>
                                                        <td class="text-right">
                                                            <a href="#" class="doc" data-id="<?= $program['id'] ?>" data-titre="<?= $program['titre'] ?>">
                                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                                    <i class="anticon anticon-download"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                        <td style="display: none;">
                                                            <div id="element-<?= $program['id'] ?>">
                                                                <?= $program['program'] ?>
                                                            </div>
                                                        </td>
                                                    <?php }elseif($program['type'] == "import"){ ?>
                                                        <td class="text-right">
                                                            <a href="uploads/<?= $program['nom_doc'] ?>" download>
                                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                                    <i class="anticon anticon-download"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php } ?>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
                                                <script>
                                                    document.querySelectorAll('.doc').forEach(function(button) {
                                                        button.addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            const programId = this.getAttribute('data-id');
                                                            const programTitre = this.getAttribute('data-titre');
                                                            const element = document.getElementById('element-' + programId);
                                                            
                                                            const opt = {
                                                                margin:       1,          // marges en cm
                                                                filename:     programTitre + ".pdf",
                                                                image:        { type: 'jpeg', quality: 0.98 },
                                                                html2canvas:  { scale: 2 },
                                                                jsPDF:        { unit: 'cm', format: 'a4', orientation: 'portrait' }
                                                            };

                                                            html2pdf().set(opt).from(element).save();
                                                        });
                                                    });
                                                </script>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Dossier Financiers</h5>
                                        <div>
                                            <a href="list-dossier.php" class="btn btn-default btn-sm">Voir Tout</a> 
                                        </div>
                                    </div>
                                    <div class="table-responsive m-t-30">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nom du dossier</th>
                                                    <th>Date</th>
                                                    <th>Catégorie(s)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $requete2 = $connect->prepare("SELECT * FROM dossier_financier ORDER BY id DESC;");
                                                    $requete2->execute();
                                                    $compteur1 = 0;
                                                    while($dossier = $requete2->fetch()){
                                                        $compteur1++;
                                                        if($compteur1 == 4){
                                                            break;
                                                        }
                                                ?>
                                                <tr>
                                                    <td>
                                                        #<?= $dossier['id'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-image avatar-sm m-r-10">
                                                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                            </div>
                                                            <h6 class="m-b-0"><?= $dossier['nomDossier'] ?></h6>
                                                        </div>
                                                    </td>
                                                    <td><?= $dossier['dateDossier'] ?></td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="badge badge-success badge-dot m-r-10"></div>
                                                            <div><?= $dossier['categorieDossier'] ?></div>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#" class="doc" data-id="<?= $dossier['id'] ?>" data-titre="<?= $dossier['nomDossier'] ?>">
                                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                                <i class="anticon anticon-download"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td style="display: none;">
                                                        <div id="element-<?= $dossier['id'] ?>">
                                                            <?= $dossier['description'] ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
                                                <script>
                                                    document.querySelectorAll('.doc').forEach(function(button) {
                                                        button.addEventListener('click', function(event) {
                                                            event.preventDefault();
                                                            const programId = this.getAttribute('data-id');
                                                            const programTitre = this.getAttribute('data-titre');
                                                            const element = document.getElementById('element-' + programId);
                                                            
                                                            const opt = {
                                                                margin:       1,          // marges en cm
                                                                filename:     programTitre + ".pdf",
                                                                image:        { type: 'jpeg', quality: 0.98 },
                                                                html2canvas:  { scale: 2 },
                                                                jsPDF:        { unit: 'cm', format: 'a4', orientation: 'portrait' }
                                                            };

                                                            html2pdf().set(opt).from(element).save();
                                                        });
                                                    });
                                                </script>
                                            </tbody>
                                        </table>
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
                                        <img src="assets/images/avatars/default-img.png" alt="">
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
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/pages/dashboard-project.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
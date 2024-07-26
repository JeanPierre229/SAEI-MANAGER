<?php 
    session_start();
    $bootCamp = $coachingindividuel = $coachingcollectif = $formation = $ceremoniefin = $mentorat = $demoday = null;
    if(!empty($_POST) && isset($_POST)){
        $bootCamp = isset($_POST['bootcamp']) ? $_POST['bootcamp'] : "";
        $coachingindividuel = isset($_POST['coachingindividuel']) ? $_POST['coachingindividuel'] : "";
        $coachingcollectif = isset($_POST['coachingcollectif']) ? $_POST['coachingcollectif'] : "";
        $formation = isset($_POST['formation']) ? $_POST['formation'] : "";
        $ceremoniefin = isset($_POST['ceremoniefin']) ? $_POST['ceremoniefin'] : "";
        $mentorat = isset($_POST['mentorat']) ? $_POST['mentorat'] : "";
        $demoday = isset($_POST['demoday']) ? $_POST['demoday'] : "";

        require 'connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("INSERT INTO parcours(bootCamp, coachingIndividuel, coachingCollectif, formation, ceremonieFin, mentorat, demoday) VALUES(?, ?, ?, ?, ?, ?, ?)");
        $requete->execute([$bootCamp, $coachingindividuel, $coachingcollectif, $formation, $ceremoniefin, $mentorat, $demoday]);
        header("Location: parametrer-parcours.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Activer un Parcours | SAEI-MANAGER</title>

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
                        <h2 class="header-title">Activer un Parcours</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="dashboardSAEI.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="#">Cohortes</a>
                                <span class="breadcrumb-item active">Activer un Parcours</span>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto bg-white" style="padding: 30px;">
                            <div class="row">
                                <div class="col-8">
                                    <p class="h3">Définissez votre parcours avec SAEI-MANAGER</p>
                                </div>
                                <div class="col text-right">
                                    <a href="parametrer-parcours.php" class="btn btn-default">Mes paramétrages</a>
                                </div>
                            </div>
                            <form action="activer-parcours.php" method="post" class="mt-4" id="formulaire">
                                <hr>
                                <div class="row">
                                    <div class="col"><strong class="px-5">Parcours</strong></div>
                                    <div class="col"><i>Veuillez sélectionnez au moins un ou plusieurs</i></div>
                                    <div class="col text-right"><span class="btn btn-default p-1 ">Cocher / Décocher</span></div>
                                </div>
                                <hr>
                                <div class="row mt-4 mb-0">
                                    <div class="col">
                                        <label for="bootcamp" class="form-label px-5">👉 BootCamp de Rentré</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="bootcamp" value="bootcamp" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label for="coachingindividuel" class="form-label px-5">👉 Coaching Individuel</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="coachingindividuel" value="coachingindividuel" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="coachingcollectif" class="form-label px-5">👉 Coaching Collectif</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="coachingcollectif" value="coachingcollectif" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="formation" class="form-label px-5">👉 Formation</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="formation" value="formation" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="ceremoniefin" class="form-label px-5">👉 Cérémonie de fin</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="ceremoniefin" value="ceremoniefin" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="mentorat" class="form-label px-5">👉 Mentorat</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="mentorat" value="mentorat" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="demoday" class="form-label px-5">👉 Demo Day</label>
                                    </div>
                                    <div class="col text-right px-5 mx-4">
                                        <input type="checkbox" name="demoday" value="demoday" id="parcours" class="form-check-input">
                                    </div>
                                </div>
                                <hr>
                                <div class="text-right">
                                    <button class="btn btn-green px-4">Poursuivre</button>
                                </div>
                            </form>
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
<script>
    const formulaire = document.getElementById('formulaire');
    formulaire.addEventListener('submit', function(event) {
        const checkboxes = document.querySelectorAll('input[id="parcours"]');
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
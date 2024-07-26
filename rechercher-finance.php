<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rechercher Financement | SAEI-MANAGER</title>

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
                        <h2 class="header-title">Rechercher un financement</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="dashboardSAEI.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="#">Programme</a>
                                <span class="breadcrumb-item active">Rechercher un financement</span>
                            </nav>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="assets/images/digiboost.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="m-b-10">Opportunités avec DigiBoost</h4>
                                        <div class="d-flex align-items-center m-t-5 m-b-15">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span class="text-gray font-weight-semibold">Darryl Day</span>
                                                <span class="m-h-5 text-gray">|</span>
                                                <span class="text-gray">2 janvier 2024</span>
                                            </div>
                                        </div>
                                        <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels</p>
                                        <div class="text-right">
                                            <a class="btn btn-orange font-weight-semibold" href="dossier-financier.php">
                                                <span>Monter votre dossier</span>
                                            </a>
                                            <a class="btn btn-green font-weight-semibold" href="#">
                                                <span>Découvrir l'opportunités</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="assets/images/enabel.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="m-b-10">Opportunités avec Enabel</h4>
                                        <div class="d-flex align-items-center m-t-5 m-b-15">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span class="text-gray font-weight-semibold">Darryl Day</span>
                                                <span class="m-h-5 text-gray">|</span>
                                                <span class="text-gray">2 janvier 2024</span>
                                            </div>
                                        </div>
                                        <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels</p>
                                        <div class="text-right">
                                            <a class="btn btn-orange font-weight-semibold" href="dossier-financier.php">
                                                <span>Monter votre dossier</span>
                                            </a>
                                            <a class="btn btn-green font-weight-semibold" href="#">
                                                <span>Découvrir l'opportunités</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="assets/images/women.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="m-b-10">Opportunités avec Women</h4>
                                        <div class="d-flex align-items-center m-t-5 m-b-15">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span class="text-gray font-weight-semibold">Darryl Day</span>
                                                <span class="m-h-5 text-gray">|</span>
                                                <span class="text-gray">2 janvier 2024</span>
                                            </div>
                                        </div>
                                        <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels</p>
                                        <div class="text-right">
                                            <a class="btn btn-orange font-weight-semibold" href="dossier-financier.php">
                                                <span>Monter votre dossier</span>
                                            </a>
                                            <a class="btn btn-green font-weight-semibold" href="#">
                                                <span>Découvrir l'opportunités</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="assets/images/fedSAEI.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="m-b-10">Opportunités avec fedSAEI</h4>
                                        <div class="d-flex align-items-center m-t-5 m-b-15">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span class="text-gray font-weight-semibold">Darryl Day</span>
                                                <span class="m-h-5 text-gray">|</span>
                                                <span class="text-gray">2 janvier 2024</span>
                                            </div>
                                        </div>
                                        <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels</p>
                                        <div class="text-right">
                                            <a class="btn btn-orange font-weight-semibold" href="dossier-financier.php">
                                                <span>Monter votre dossier</span>
                                            </a>
                                            <a class="btn btn-green font-weight-semibold" href="#">
                                                <span>Découvrir l'opportunités</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-fluid" src="assets/images/digiboost.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="m-b-10">Opportunités avec DigiBoost</h4>
                                        <div class="d-flex align-items-center m-t-5 m-b-15">
                                            <div class="avatar avatar-image avatar-sm">
                                                <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <span class="text-gray font-weight-semibold">Darryl Day</span>
                                                <span class="m-h-5 text-gray">|</span>
                                                <span class="text-gray">2 janvier 2024</span>
                                            </div>
                                        </div>
                                        <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels</p>
                                        <div class="text-right">
                                            <a class="btn btn-orange font-weight-semibold" href="dossier-financier.php">
                                                <span>Monter votre dossier</span>
                                            </a>
                                            <a class="btn btn-green font-weight-semibold" href="#">
                                                <span>Découvrir l'opportunités</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-t-30">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
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

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
<?php 
    session_start();
    if(!empty($_POST) && isset($_POST)){
        $titre = $_POST['titreP'];
        $categorie = $_POST['categorie'];
        $nom_doc = $_POST['titreP']. '.pdf';
        $description = nl2br($_POST['description']);
        setlocale(LC_TIME, 'fr_FR.UTF-8', 'fra');
        $date = new DateTime();
        $formattedDate = $date->format('Y-m-d');
        $timestamp = strtotime($formattedDate);
        $formattedDate = strftime('%e %B %Y', $timestamp);
        $type = "vierge";

        if (isset($_POST['import'])) {
            $type = "import";
            $titre = $_POST['titreI'];
            $categorie = $_POST['categorieimport'];
            $nom_doc = $_FILES['programfile']['name'];
            $description = "";
            $uploadDir = 'uploads/';
            setlocale(LC_TIME, 'fr_FR.UTF-8', 'fra');
            $date = new DateTime();
            $formattedDate = $date->format('Y-m-d');
            $timestamp = strtotime($formattedDate);
            $formattedDate = strftime('%e %B %Y', $timestamp);
            
            // Vérifie si le dossier existe, sinon le crée
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
        
            // Chemin complet du fichier uploadé
            $uploadFile = $uploadDir . basename($_FILES['programfile']['name']);
        
            // Vérifie le type du fichier
            $fileType = mime_content_type($_FILES['programfile']['tmp_name']);
            if ($fileType !== 'application/pdf') {
                $error = "Erreur : Le fichier doit être un PDF.";
                exit;
            }
        
            // Déplace le fichier depuis le répertoire temporaire vers le dossier de destination
            if (move_uploaded_file($_FILES['programfile']['tmp_name'], $uploadFile)) {
                require 'connectDB.php';
                $connect = DataBase::connect();
                $requete = $connect->prepare("INSERT INTO program_elaborer(titre, categorie, program, nom_doc, dateProgram, type) VALUES(?, ?, ?, ?, ?, ?);");
                $requete->execute(array($titre, $categorie, $description, $nom_doc, $formattedDate, $type));
                header('Location: list-program.php');
            } else {
                $error = "Erreur lors de l'upload du fichier.";
            }
        }

        require 'connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("INSERT INTO program_elaborer(titre, categorie, program, nom_doc, dateProgram, type) VALUES(?, ?, ?, ?, ?, ?);");
        $requete->execute(array($titre, $categorie, $description, $nom_doc, $formattedDate, $type));
        header('Location: list-program.php');

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ELABORER -- SAEI-MANAGER</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo-icon.png">

    <!-- page css -->
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>


</head>
<style>
    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 300px;
    }
    .labProgram, .modProgram, .importProgram{
        display: none;
    }
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
                    <div class="page-header">
                        <h2 class="header-title">Elaborer Programme</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="dashboardSAEI.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a class="breadcrumb-item" href="#">Programme</a>
                                <span class="breadcrumb-item active">Elaborer Programme</span>
                            </nav>
                        </div>
                    </div>
                    <div class="d-flex centre my-sm-5">
                        <div class="col text-center">
                            <a href="#" onclick="cacherLabProgram()">
                                <div class="avatar avatar-icon">
                                    <i class="anticon anticon-plus text-dark"></i>
                                </div>
                                <p>Créér un programme vierge</p>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" onclick="cacherModProgram()">
                                <div class="avatar avatar-icon">
                                    <i class="anticon anticon-diff text-dark"></i>
                                </div>
                                <p>Utiliser un modèle</p>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="#" onclick="importProgram()">
                                <div class="avatar avatar-icon">
                                    <i class="anticon anticon-upload text-dark"></i>
                                </div>
                                <p>Importer un programme</p>
                            </a>
                            <form action="#" method="post" style="display: none;">
                                <input type="file" name="labProgram" id="labProgram" />
                            </form>
                        </div>
                    </div>
                    <div class="row labProgram">
                        <div class="col">
                            <form action="elaborer-program.php" method="post">
                                <div class="mt-3">
                                    <label for="titreP" class="form-label">Titre du programme: </label>
                                    <input type="text" name="titreP" id="titreP" class="form-control" required>
                                </div>
                                <div class="mt-3">
                                    <label for="categorie" class="form-label">Categorie du programme: </label>
                                    <select name="categorie" id="categorie" class="form-control">
                                        <option value="Numérique">Numérique</option>
                                        <option value="Art">Art</option>
                                        <option value="Culture">Culture</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Audio-Visuel">Audio-Visuel</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="description" class="form-label">Description du programme: </label>
                                    <textarea name="description" id="description" class="form-control p-3"></textarea>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-orange">ELABORER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <section class="modProgram">
                        <div class="row">
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="modele-program.php">
                                    <img src="assets/images/modProgramme.png" alt="Modèle de programme" class="img-fluid border border-dark" style="border: 2px solid black; padding: 20px;">
                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="importProgram">
                        <form action="elaborer-program.php" method="post" enctype="multipart/form-data">
                            <?php if(isset($success)){ ?>
                                <p class="alert alert-success">
                                    <?= $success ?>
                                </p>
                            <?php }elseif(isset($error)){ ?>
                                <p class="alert alert-danger">
                                    <?= $error ?>
                                </p>
                            <?php } ?>
                            <div class="mt-3">
                                <label for="titreI" class="form-label">Titre du programme: </label>
                                <input type="text" name="titreI" id="titreI" class="form-control" required>
                            </div>
                            <div class="mt-3">
                                <label for="categorieimport" class="form-label">Categorie du programme: </label>
                                <select name="categorieimport" id="categorieimport" class="form-control">
                                    <option value="Numérique">Numérique</option>
                                    <option value="Art">Art</option>
                                    <option value="Culture">Culture</option>
                                    <option value="Sport">Sport</option>
                                    <option value="Audio-Visuel">Audio-Visuel</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="programfile" class="form-label">Sélectionner le document (.pdf): </label>
                                <input type="file" name="programfile" id="programfile" class="form-control" accept="application/pdf" required/>
                            </div>
                            <div class="mt-3">
                                <button name="import" class="btn btn-orange col-12">Importer</button>
                            </div>
                        </form>
                    </section>
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
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/pages/dashboard-project.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
<script>
    //Afficher / Cacher <<Elaborer Programme>>
    const pv = document.querySelector('.labProgram');
    const pm = document.querySelector('.modProgram');
    const pi = document.querySelector('.importProgram');
    function cacherLabProgram(){
        if(pv.style.display == "none"){
            pv.style.display = "block";
            pm.style.display = "none";
            pi.style.display = "none";
        }else{
            pv.style.display = "none";
        }
    }
    //Afficher / Cacher <<Modèle de Programme>>
    function cacherModProgram(){
        if(pm.style.display == "none"){
            pm.style.display = "block";
            pv.style.display = "none";
            pi.style.display = "none";
        }else{
            pm.style.display = "none";
        }
    }
    //Importer un programme
    function importProgram(){
        if(pi.style.display == "none"){
            pi.style.display = "block";
            pm.style.display = "none";
            pv.style.display = "none";
        }else{
            pi.style.display = "none";
        }
    }
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

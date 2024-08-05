<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL -- SAEI-MANAGER</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Lien icone SAEI-MANAGER -->
    <link rel="icon" href="assets/images/logo/logo-icon.png">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .bg{
        background: linear-gradient(180deg, #FFFFFF, #E0DEDE);
    }
    .hideCohortes, .hideCoach, .hideLearn, .hideSCoach, .hideSEntrepreneur{
        display: none;
    }
    .hideProgram, .hideSAEI{
        display: block;
    }
    main{
        z-index: 1;
    }
</style>
<body>
    <!-- DEBUT PARTIE: HEADER -->
    <?php require 'header.php'; ?>
    <br><br><br><br>
    <!-- FIN PARTIE: HEADER -->

    <!-- DEBUT PARTIE: PRESENTATION -->
    <main class="container-fluid">

        <section class="row mx-auto d-flex justify-content-center">
            <div class="col mt-5 py-4 px-5 animated-text-x-left">
                <h1 class="text-start display-4"><strong>BIENVENUE A VOUS CHEZ SAEI-MANAGER.</strong></h1>
                <p class="my-5">
                    Découvrez notre solution complète pour optimiser l'accompagnement et la gestion des entrepreneurs innovants.
                </p>
                <p>
                    <a href="tarifs.php">
                        <button class="btn btn-green px-5 rounded-0">COMMENCER</button>
                    </a>
                </p>
            </div>
            <div class="col d-flex justify-content-center animated-text-x-right">
                <img src="assets/images/Group-2.png" alt="Image du Header" class="img w-100">
            </div>
        </section>

        <section class="container-fluid bg">
            <div class="row p-5 animated-text-y">
                <div class="col-6 ms-5 p-5 d-flex justify-content-center">
                    <img src="assets/images/dashboard-new.png" alt="Image du Dashboard" class="img border border-secondary rounded-3 w-100">
                </div>
                <div class="col-5 ms-5 p-5 my-lg-auto">
                    <h3 class="">TOUT VOS OUTILS DANS UN DASHBOARD</h3>
                    <p class="h6" style="line-height: 30px;">
                        Accédez à tous vos outils de gestion en un seul endroit avec SAEI-Manager.
                    </p>
                </div>
            </div>
            
        </section>

        <!-- DEBUT PARTIE: FONCTIONNALTES -->
        <section class="my-5">
            <div class="row animated-text-y">
                <div class="col text-center">
                    <h2 class="">FONCTIONNALITES DE GESTION OPTIMISEE</h2>
                </div>
            </div>
            <div class="row my-3 animated-text-y">
                <div class="col text-center">
                    <p class="w-50 mx-auto">
                        Découvrez comment notre plateforme simplifie la gestion de vos programmes d'accompagnement, de vos coachs et mentors, de vos cohortes, et de vos modules d'apprentissage.
                    </p>
                </div>
            </div>
            <div class="row mx-5 animated-text-y">
                <div class="col mx-auto text-center bg-green border-bottom-orange cursor rounded-start-3" id="program" onclick="showSection('Program')">
                    <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    PROGRAMME
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor"  id="cohortes"  onclick="showSection('Cohortes')">
                    <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COHORTES
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="coach" onclick="showSection('Coach')">
                    <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COACH & MENTORS
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor rounded-end-3" id="learn" onclick="showSection('Learn')">
                    <img src="assets/images/learn.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    LEARN
                </div>
            </div>
            <section class="my-4 hideProgram animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>OPTIMISEZ LA GESTION DE VOS PROGRAMME.</h3>
                        <p class="my-4">
                            La gestion optimisée des programmes implique l'utilisation d'outils et de méthodes efficaces pour planifier, suivre, et évaluer les activités et ressources des programmes afin de maximiser leur impact et assurer la réalisation des objectifs fixés.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideCohortes animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3> GERER EFFICACEMENT VOTRE COHORTES</h3>
                        <p class="my-4">
                            La gestion optimisée des cohortes consiste à organiser et suivre efficacement les groupes d'entrepreneurs afin de favoriser les interactions, maximiser l'apprentissage collectif, et garantir un accompagnement personnalisé tout au long de leur parcours entrepreneurial.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Activer un Parcours 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Créer une cohortes 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Accompagnement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Boîtes à outils 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideCoach animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>FACILITER LA GESTION DES COACHS</h3>
                        <p class="my-4">
                            La gestion des coachs implique l'organisation et le suivi des activités des coachs pour assurer un mentorat efficace et personnalisé aux entrepreneurs.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Ajouter un Coach 
                        </p>
                        <p class="my-5">
                            <i class="fa fa-caret-right text-orange"></i>
                            Apparier un Coach 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Liste des Coachs 
                        </p>
                        <p class="my-5">
                             
                        </p>
                        <p class="mt-5">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideLearn animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3 class="text-uppercase">Nos modules d'apprentissage</h3>
                        <p class="my-4">
                            La gestion du module d'apprentissage consiste à organiser et suivre les ressources et activités pédagogiques pour assurer un apprentissage structuré et efficace des utilisateurs.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Ressources documentaires <br/>des coachs 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Ressources documentaires <br/>des incubés 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Liste des ressources <br/>documentaires 
                        </p>
                        <p class="my-5">
                             
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
        </section>
        <!-- FIN PARTIE: FONCTIONNALITES -->

        <!-- DEBUT PARTIE: SOLUTION -->
        <section class="my-5">
            <div class="row animated-text-y">
                <div class="col text-center">
                    <h2 class="">SOLUTIONS PROPOSEES SUR SAEI-MANAGER</h2>
                </div>
            </div>
            <div class="row my-3 animated-text-y">
                <div class="col text-center">
                    <p class="w-50 mx-auto">
                        Les solutions proposées sont spécifiquement conçues pour répondre aux besoins des coachs, des SAEI, et des entrepreneurs, en optimisant leur gestion, leur collaboration et leur développement.
                    </p>
                </div>
            </div>
            <div class="row mx-5 animated-text-y">
                <div class="col mx-auto text-center bg-green border-bottom-orange cursor rounded-start-3" id="saei" onclick="showSection1('SAEI')">
                    <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    SAEI
                </div>
                <div class="col mx-auto my-lg-auto text-center bg-gray border-bottom-orange cursor"  id="scoach"  onclick="showSection1('SCoach')">
                    <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COACH
                </div>
                <div class="col mx-auto my-lg-auto text-center bg-gray border-bottom-orange cursor rounded-end-3" id="entrepreneur" onclick="showSection1('SEntrepreneur')">
                    <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    ENTREPRENEURS
                </div>
            </div>
            <section class="my-4 hideSAEI animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (SAEI)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideSCoach animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (COACH)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideSEntrepreneur animated-text-y">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (Entrepreneurs)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
        </section>
        <!-- FIN PARTIE: SOLUTION -->

        <!-- DEBUT PARTIE: PAYER POUR COMMENCER -->
        <?php require 'payerCommencer.php'; ?>
        <!-- FIN PARTIE: PAYER POUR COMMENCER -->

    </main>
    <!-- FIN PARTIE: PRESENTATION -->

    <!-- DEBUT PARTIE: FOOTER -->
    <?php require 'footer.php'; ?>
    <!-- FIN PARTIE: FOOTER -->
</body>
</html>
<script>
    //Partie de la fonctionnalite
    const sections = document.querySelectorAll('.hideProgram, .hideCohortes, .hideCoach, .hideLearn');
    const selectProgram = document.getElementById('program');
    const selectCohortes = document.getElementById('cohortes');
    const selectCoach = document.getElementById('coach');
    const selectLearn = document.getElementById('learn');

    function showSection(section) {
        sections.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
    // Partie Sélection
    selectProgram.addEventListener('click', function(){
        selectProgram.style.backgroundColor = "#00A65A";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectCohortes.addEventListener('click', function(){
        selectCohortes.style.backgroundColor = "#00A65A";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectCoach.addEventListener('click', function(){
        selectCoach.style.backgroundColor = "#00A65A";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectLearn.addEventListener('click', function(){
        selectLearn.style.backgroundColor = "#00A65A";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
    });

    //Partie de la solution
    const sections1 = document.querySelectorAll('.hideSAEI, .hideSCoach, .hideSEntrepreneur');
    function showSection1(section) {
        sections1.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
    const selectSAEI = document.getElementById('saei');
    const selectSCoach = document.getElementById('scoach');
    const selectEntrepreneurs = document.getElementById('entrepreneur');
    // Partie sélection
    selectSAEI.addEventListener('click', function(){
        selectSAEI.style.backgroundColor = "#00A65A";
        selectSCoach.style.backgroundColor = "#D9D9D9";
        selectEntrepreneurs.style.backgroundColor = "#D9D9D9";
    });
    selectSCoach.addEventListener('click', function(){
        selectSCoach.style.backgroundColor = "#00A65A";
        selectSAEI.style.backgroundColor = "#D9D9D9";
        selectEntrepreneurs.style.backgroundColor = "#D9D9D9";
    });
    selectEntrepreneurs.addEventListener('click', function(){
        selectEntrepreneurs.style.backgroundColor = "#00A65A";
        selectSCoach.style.backgroundColor = "#D9D9D9";
        selectSAEI.style.backgroundColor = "#D9D9D9";
    });
</script>
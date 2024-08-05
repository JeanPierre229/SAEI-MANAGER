<style>
    a{
        /* color: black; */
        text-decoration: none;
    }
    .activate{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
        text-underline-offset: 10px;
    }
    .activate:hover{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .btn-green{
        background-color: #00A65A;
        color: white;
        border: 2px solid transparent;
    }
    .btn-green:hover{
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover{
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange{
        color: #F76300;
    }
    .text-green{
        color: #00A65A;
    }
    .bg-green{
        background-color: #00A65A;
    }
    .btn-default{
        background-color: transparent;
        border: 1px solid #00A65A;
        color: #00A65A;
    }
    .btn-default:hover{
        background-color: transparent;
        border: 1px solid #00A65A;
        color: #00A65A;
    }
    .border-bottom-orange{
        border-bottom: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .bg-select{
        background-color: #FFFAFA;
    }
    .bg-gray{
        background-color: #D9D9D9;
    }
    .d-meme-icone{
        width: 45px;
        height: 45px;
    }
    .cursor{
        cursor: pointer;
    }
    .cadrant-index{
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green{
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify{
        text-align: justify;
    }
    @keyframes fadeInUpY {
        from {
            opacity: 0;
            transform: translateY(100px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animated-text-y {
        animation: fadeInUpY 2s ease-in-out;
    }
    @keyframes fadeInUpXl {
        from {
            opacity: 0;
            transform: translateX(-300px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animated-text-x-left {
        animation: fadeInUpXl 2s ease-in-out;
    }
    @keyframes fadeInUpXr {
        from {
            opacity: 0;
            transform: translateX(500px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .animated-text-x-right {
        animation: fadeInUpXr 2s ease-in-out;
    }
    header{
        background-color: #0A0A0A;
        opacity: 0.8;
        position: fixed;
        z-index: 99999999999999;
    }
    .border-green{
        border: 1px solid #00A65A;
    }
</style>
<header class="container-fluid">
    <div class="row">
        <div class="col ms-5 my-lg-auto">
            <h2 class="my-lg-auto">
                <a href="index.php">
                    <img src="assets/images/logo/logo-smw.png" alt="Logo de SAEI-MANAGER" class="img w-50 p-2">
                </a>
            </h2>
        </div>
        <div class="col navbar navbar-expand-lg me-5">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item my-lg-auto"><a href="fonctionnalites.php" class="nav-link text-white <?php if($active == "fonctionnalites"): ?> activate <?php endif ?>">Fonctionnalites</a></li>
                    <li class="nav-item my-lg-auto"><a href="solution.php" class="nav-link text-white <?php if($active == "solution"): ?> activate <?php endif ?>">Solutions</a></li>
                    <li class="nav-item my-lg-auto"><a href="tarifs.php" class="nav-link text-white <?php if($active == "tarifs"): ?> activate <?php endif ?>">Tarifs</a></li>
                    <li class="nav-item my-lg-auto col-2"><a href="propos.php" class="nav-link text-white <?php if($active == "propos"): ?> activate <?php endif ?>">A propos</a></li>
                    <li class="nav-item my-lg-auto">
                        <a href="connexion.php" class="nav-link">
                            <button class="btn btn-default rounded-0" style="font-size: 13px;">Connexion</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tarifs.php" class="nav-link">
                            <button class="btn btn-orange rounded-0" style="font-size: 13px;">Commencer</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <hr> -->
    </div>
</header>
<script src="assets/js/bootstrap.min.js"></script>
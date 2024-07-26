<?php
    session_start();
    $_SESSION['error'] = null;
    $mail = $motDePasse = null;
    
    if (!empty($_POST) && isset($_POST)) {
        $mail = check($_POST['mail']);
        $motDePasse = check(sha1($_POST['motDePasse']));

        require 'connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->query("SELECT * FROM users_saei WHERE mail = '$mail' AND motDePasse = '$motDePasse'");
        $user = $requete->fetch();

        if($requete->rowCount() > 0){
            $_SESSION['nom_structure'] = $user['nomStructure'];
            $_SESSION['type_structure'] = $user['typeStructure'];
            $_SESSION['mail'] = $user['mail'];
            $_SESSION['pays'] = $user['pays'];
            $_SESSION['ville'] = $user['ville'];
            $_SESSION['adress'] = $user['adresse'];
            $_SESSION['contact'] = $user['contact'];
            $_SESSION['site'] = $user['site'];
            $_SESSION['phaseAccompagnement'] = $user['phaseAccompagnement'];
            $_SESSION['anneeActivite'] = $user['anneeActivite'];
            $_SESSION['program'] = $user['program'];
            $_SESSION['cohortes'] = $user['cohortes'];
            $_SESSION['coach'] = $user['coach'];
            $_SESSION['learn'] = $user['learn'];
            header('Location: dashboardSAEI.php');
        }else{
            $_SESSION['error'] = "Compte inexistant !";
            header('Location: connexion.php');
        }
    }
    
    function check($donnee) {
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlentities($donnee);
        return $donnee;
    }  
?>
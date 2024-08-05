<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';
    if(!empty($_GET)){
        $email = $_GET['mail'];
        $mail = new PHPMailer(true);

        try{
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dodohoundealo@gmail.com';
            $mail->Password = 'ryvryvnagpyykuut';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
    
            $mail->setFrom('dodohoundealo@gmail.com','Waxangari L@bs');
            $mail->addAddress($email);
            $mail->isHTML(true);
            // Récupération de la clé
            require 'connectDB.php';
            $connect = DataBase::connect();
            $requete = $connect->prepare("SELECT * FROM users_saei WHERE mail = ?");
            $requete->execute(array($email));
            $cle = $requete->fetch();
    
            // Corps du message
            $cleCode = $cle['cle'];
            $mail->Subject = "Vérification d'Email !";
            $mail->Body = "Salut votre code est: ".$cleCode;;
            $mail->setLanguage('fr');

            // Envoie du mail
            $mail->send();
    
        }catch(Exception $e){
            echo "Message non envoyé ! {$mail->ErrorInfo}";
        }
    }else{
        $email = "";
    }

    if(!empty($_POST['verifMail'])){
        $newmail = $_POST['newmail'];
        require 'connectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("SELECT * FROM users_saei WHERE mail = ?");
        $requete->execute(array($newmail));
        $cle = $requete->fetch();

        if($cle['cle'] == $_POST['confMail']){
            header('Location: connexion.php');
        }else{
            $error = "Code Incorrect !";
        }
    }

    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlentities($donnee);
        return $donnee;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBUTER -- SAEI-MANAGER</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Lien icone WSA -->
    <link rel="icon" href="images/logo.png">
</head>
<style>
    a{
        color: black;
        text-decoration: none;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .btn-green{
        background-color: #00A65A;
        color: white;
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
    .form-control{
        border-radius: 0;
        border: 0;
        border-bottom: 3px solid black;
    }
    .text-underline{
        text-decoration: underline;
    }
    body{
        background-image: url('assets/images/program-img.jpg');
        background-size: cover;
    }
    .rounded-start-left-1{
        border-top-left-radius: 100px;
    }
    .rounded-end-right-1{
        border-bottom-right-radius: 100px;
    }
    .centre{
        width: 700px;
        height: 100%vh;
        display: block;
        align-items: center;
        justify-content: center;
    }
</style>
<body class="p-5">
    <section class="container centre">
        <div class="row d-flex justify-content-center p-5">
            <div class="mx-auto shadow bg-light p-5 rounded-start-left-1 rounded-end-right-1">
                <form action="confirm_mail.php" method="post">
                    <div class="my-3">
                        <h3>VEUILLEZ CONFIRMER VOTRE MAIL</h3>
                        <p class="mt-3 mb-5">
                            Nous avons envoyer un code au mail suivant: <br>
                            <span class="text-underline"><?= $email ?></span>
                        </p>
                        <?php if(isset($error)){ ?>
                            <p class="alert alert-success">
                                <?= $error ?>
                            </p>
                        <?php } ?>
                        <input type="email" name="newmail" id="newmail" value="<?= $email ?>" style="display: none;">
                        <input type="number" name="confMail" id="confMail" class="form-control bg-light" required>
                    </div>
                    <div class="my-5 text-center">
                        <input type="submit" value="VERIFIER" name="verifMail" id="verifMail" class="btn btn-orange rounded-0 px-4" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
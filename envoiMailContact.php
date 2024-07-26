<!-- Vérification du mail, connexion à la base de donnée et envoie du mail -->
<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $nom = null;
    $sujet = null;
    $message = null;
    $email = null;
    $_SESSION['error'] = null;
    $_SESSION['success'] = null;
    if(!empty($_POST) && isset($_POST)) {
        $nom = check($_POST['nom']);
        $sujet = check($_POST['sujet']);
        $message = check($_POST['message']);
        $email = check($_POST['mail']);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            require "connectDB.php";
            $connect = DataBase::connect();
            $requete = $connect->prepare("
                                INSERT INTO contact_us(nomContact, sujetContact, mailContact, messageContact)
                                VALUES (?, ?, ?, ?);
                            ");
            $requete->execute(array($nom, $sujet, $email, $message));
            $_SESSION['success'] = "Message envoyé !";
            header('Location: propos.php#contact-us');
        }else{
            $_SESSION['error'] = "E-mail incorrect !";
            header('Location: propos.php#contact-us');
        }
        if(envoi_mail($nom, $sujet, $email, $message)){
            $_SESSION['success'] = "Message envoyé !";
            header('Location: propos.php#contact-us');
        }else{
            $_SESSION['error'] = "Erreur d'envoie !";
            header('Location: propos.php#contact-us');
        }
    } 

    function envoi_mail($from_name, $from_subject, $from_mail, $from_message){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'dodohoundealo@gmail.com';
        $mail->Password = 'ryvryvnagpyykuut';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom($from_name, $from_mail);
        $mail->addAddress('dodohoundealo@gmail.com','Jean Pierre');
        $mail->isHTML(true);
        $mail->Subject = $from_subject;
        $mail->Body = $from_message;
        $mail->setLanguage('fr');
        
        if(!$mail->send()){
            return false;
        }else{
            return true;
        }

    }

    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlentities($donnee);
        return $donnee;
    }
?>
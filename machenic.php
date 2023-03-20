<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// header("Location: ./mechanic.html");
if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    $location = htmlentities($_POST['location']);
    $machenic = htmlentities($_POST['comp']);
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='saniatalib888@gmail.com';
    $mail->Password = 'gybskpuoacbglnjo';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('saniatalib888@gmail.com');
    $mail->Subject = ("$email ()");
    $mail->Body =$message 
    .$location 
    .$machenic;
    $mail->AltBody = $machenic;
    $mail->send();

    header("Location: ./response.php");


    }



?>




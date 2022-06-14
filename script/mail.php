<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include '../env/env.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'allesnanotest@gmail.com';
    $mail->Password = $PASS;
    $mail->Port = 587;

    $mail->setFrom('remetente@email.com.br');
    $mail->addAddress('allesnanotest@gmail.com', 'Allesnano');

    $mail->isHTML(true);
    $mail->Subject = 'Assunto do email';
    $mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
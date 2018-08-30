<?php

namespace Base\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends PHPMailer
{

    public static function EnviaEmail($email, $nome, $assunto, $corpo)
    {

        require_once __DIR__ . "/../../app/Config/email.php";

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = Host;
            $mail->SMTPAuth = SMTPAuth;
            $mail->Username = Username;
            $mail->Password = Password;
            $mail->SMTPSecure = SMTPSecure;
            $mail->Port = Port;

            //Recipients
            $mail->setFrom('huriellopes1996@gmail.com', 'Teste');

            // Roda o looping de e-mails aqui

            $mail->addAddress($email, $nome);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $corpo;

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}

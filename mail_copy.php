<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            use PHPMailer\PHPMailer\SMTP;
            require 'mail/Exception.php';  //my phpmailer scripts are in a 'mail' subdirectory
            require 'mail/PHPMailer.php';
            require 'mail/SMTP.php';
            $to_email = $_SESSION['email'];  //email address of the person logged in, set elsewhere
        ?>
    </head>
    <body>

<?php
        echo "Testing PHPmail 2<br>";
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0; // set to 3 for verbose debug output
        $mail->isSMTP();
        $mail->Host = "a2plcpnl0852.prod.iad2.secureserver.net";  //specific to my cPanel
        $mail->Port = 25;
        $mail->SMTPSecure = "none";
        $mail->SMTPAuth = false;
        $mail->ENCRYPTION = "none";  //this is essential
        $mail->setFrom('teddy@fareharbor.dev', 'Admin');
        $mail->AddAddress('kevin.billeaud@fareharbor.dev');   //I set this elsewhere. you can put in a static value for testing.
        $mail->CharSet = 'utf-8';
        $mail->Subject = "PHPMailer Message test ";
        $mail->Body = "Hi! \n\n This is my first e-mail sent through PHPMailer.";

        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
            echo $msg;
        } else {
            $msg .= "Message sent!";
            echo $msg;
        }
    ?>
    </body>
</html>

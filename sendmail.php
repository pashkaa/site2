<?php
    use PHPMailer\PHPMailer\MHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    $mail->setFrom('info@fls.guru', '123');

    $mail->addAddress('pashaleet@gmail.com');

    $mail->Subject = '123123';

    $body = 'Пистмо';

    if(trim(!empty($_POST['name']))) {
        $body.='Name = '.$_POST['name'];
    }

    if(!$mail->send()) {
        $message = 'Error';
   } else {
       $message = 'Super'
   }

   $response = ['message' => $message];

   header('Content-type: application/json');
   echo json_encode($response);
?>
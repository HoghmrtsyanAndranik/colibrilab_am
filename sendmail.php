<?php

$LANG=file_get_contents('session.php');




if($LANG=='ARM'){
    $invalid_email="Գոյություն չունեցող էլ․հասցե";
    $require="Լրացրեք բոլոր դաշտերը";
    $fail='Հաղորդագրությունը չի ուղարկվել';
    $success='Հաղորդագրությունն հաջողությամբ ուղարկվել է';
}
elseif($LANG=='ENG'){
    $invalid_email="Invalid email address";
    $require="Please,all fields are required";
    $fail='The message was not sent';
    $success='The message sent successfully';

}

function output($message,$flag=true){
     return json_encode(['message'=>$message,'success'=>$flag]);
}

$name=$_POST['name']??false;
$email=$_POST['email']??false;
$message=$_POST['message']??false;

// $name="Tigran";
// $email="Tigran@mail.ru";
// $message="barev\ndzez";
if(!$name||!$email||!$message){
   echo output($require,false);
   die;
   
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo output($invalid_email,false);
    die;
}
$body="email - $email<br>message - $message";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;
$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hoghmrtsyan.and@mail.ru';                 // SMTP username
$mail->Password = 'AAA619800';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
//$mail->SMTPDebug = 2;
$mail->setFrom('hoghmrtsyan.and@mail.ru', $name);
//$mail->addAddress('armenian-ecuadorian@relationship.am','Andranik');
 //if($send_email == 1)
$mail->addAddress($email,'Colibrilab');
$mail->addAddress('colibrilabcenter@gmail.com','Colibrilab');
     // Add a recipient

/*$mail->addReplyTo($email,$last_name.' '.$name);*/

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'study';
$mail->Body    = $body;

if(!$mail->send()) {
   echo output($fail,false);
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo output($success);
}


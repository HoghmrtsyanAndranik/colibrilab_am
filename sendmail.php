<?php

$LANG=file_get_contents('session.php');
include ('model.php');
$model=new Model;


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

// function output($message,$flag=true){
//      return json_encode(['message'=>$message,'success'=>$flag]);
// }

$name=$_POST['name']??false;
$email=$_POST['email']??false;
$message=$_POST['message']??false;

// $name="Tigran";
// $email="Tigran@mail.ru";
// $message="barev\ndzez";
if(!$name||!$email||!$message){
   echo $model->output($require,false);
   die;
   
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo $model->output($invalid_email,false);
    die;
}
$body="name $name<br>email - $email<br>message - $message";

require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// Load Composer's autoloader



$mail = new PHPMailer();

$mail->isSMTP();
$mail->CharSet = "UTF-8";
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'hoghmrtsyan.and@gmail.com';
$mail->Password = 'oobjrgtduvjbvnow';
$mail->setFrom($email,$name);
$mail->addAddress($email,'Colibrilab');
$mail->addAddress('colibrilabcenter@gmail.com','Colibrilab');
$mail->addAddress('hoghmrtsyan.and@mail.ru','Colibrilab');
//$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'study';
$mail->msgHTML($body);


                                  // Set mailer to use SMTP
                              // Enable SMTP authentication
                          // SMTP password
                           // Enable TLS encryption, `ssl` also accepted
                                  // TCP port to connect to

                
if($mail->send()) {
    //$model->update_student($user_id);
    echo $model->output($success,true);
 }
 else 
    echo $model->output($fail,false);

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;


// require 'src/PHPMailer.php';
// require 'src/SMTP.php';
// require 'src/Exception.php';

// $mail = new PHPMailer;
// $mail->CharSet = "UTF-8";


// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'hoghmrtsyan.and@mail.ru';                 // SMTP username
// $mail->Password = 'AAA619800';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

// $mail->setFrom('hoghmrtsyan.and@mail.ru', $name);

// $mail->addAddress($email,'Colibrilab');
// $mail->addAddress('colibrilabcenter@gmail.com','Colibrilab');
 
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'study';
// $mail->Body    = $body;

// if(!$mail->send()) {
//    echo output($fail,false);
//    // echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo output($success);
// }

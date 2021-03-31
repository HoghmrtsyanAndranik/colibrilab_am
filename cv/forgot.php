<?php


$LANG=file_get_contents('../session.php');
include('model.php');
$model=new Model;



if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $empty='էլ․ փոստը  նշված չէ';
   $not_reg='Չգրանցված էլ․ հասցե';
   $success="Ձեր նոր գաղտնաբառն ուղարկվել է Ձեր էլ․ հասցեին";
   $subject="CV գաղտնաբառ";
   $new_pass="Ձեր նոր գաղտնաբառն է։ ";
   $fail="Ձեր  գաղտնաբառը չի փոխվել";
}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   
   $empty='Email field is required';
   $success="Your new password sended to your email";
   $not_reg='Email not found';
   $subject="CV password";
   $new_pass="Your new CV password is: ";
   $fail="Your password is not changed";
}	


 function test_input( $data):string {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        
}
 $email = test_input($_REQUEST["email"]); 


 
if(empty($email)){
    echo $model->output($empty,false);
     die; 
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo $model->output($invalid_email,false);
     die; 
}
$student=$model->get_student_by_email($email);


if(!$student){
   echo $model->output($not_reg,false);
   die; 

}

require '../src/SMTP.php';
require '../src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// Load Composer's autoloader
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->CharSet = "UTF-8";
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'hoghmrtsyan.and@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'oobjrgtduvjbvnow';

//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'Colibrilab');

//Set an alternative reply-to address
//$mail->addReplyTo('hoghmrtsyan.and@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($email,'Colibrilab');

//Set the subject line
$mail->Subject =$subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body=$model->get_random_password();
$mail->msgHTML("<h3>$new_pass$body</h3>");

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('../assets/img/logo.png');

//send the message, check for errors
if($mail->send()){
         $model->change_password($student['id'],$body);
         echo $model->output($success,true);
 }
   else{
     echo $model->output($fail,false);
   }

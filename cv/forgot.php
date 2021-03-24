
<?php


$LANG=file_get_contents('../session.php');
include('model.php');
$model=new Model;



if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $empty='էլ․ փոստը  նշված չէ';
   $not_reg='Չգրանցված էլ․ հասցե';
   $success="Ձեր նոր գաղտնաբառն ուղարկվել է Ձեր էլ․ հասցեին";
}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   
   $empty='Email field is required';
   $success="Your new password sended to your email";
   $not_reg='Email not found';
  
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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../src/PHPMailer.php';
require '../src/Exception.php';
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


$mail->isHTML(true);                                  // Set email format to HTML
$body=$model->get_random_password();

$mail->Subject = 'Forgot CV password';
$mail->Body    = $body;

if(!$mail->send()) {
   echo output('Mailer Error: ' . $mail->ErrorInfo,false);
   
   
} else {
    $model->change_password($student['id'],$body);
    echo output($success);
}



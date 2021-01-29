<?php

//header('Content-Type: text/html; charset=utf-8');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('register_lang.php');
include('model.php');
$model=new Model;

if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $success='Դուք հաջողությամբ գրանցվել եք։';
   $fail='Գրանցումը չի կատարվել։';
   $empty='Լրացրեք բոլոր դաշտերը';
   $not_match="Գաղտնաբառերը չեն համընկնում";
}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   $success='You are sign in successfully';
   $fail='You are not sign in successfully';
   $empty='All fields are required';
   $not_match="Passwords not matching";
}	

 function test_input( $data):string {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        
}
 $email = test_input($_REQUEST["email"]); 
 $pass1=test_input($_POST['pass1']);
 $pass2=test_input($_POST['pass2']);

if(empty($pass1)||empty($pass2)||empty($email)){
    echo $model->output($empty,false);
     die; 
}

 

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo $model->output($invalid_email,false);
     die; 
 }  


 if($pass1!=$pass2){
     echo $model->output($not_match,false);
      die; 
 }

$user_id=$model->register_cv_student($email,$pass1);

if(!$user_id){
    echo $model->output($fail,false);
    die;
}
else{
  echo $model->output($user_id,true);
    die;
}






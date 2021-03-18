<?php

$LANG=file_get_contents('../session.php');
session_start();
//include('register_lang.php');
include('model.php');
$model=new Model;

if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $fail='Սխալ էլ․ հասցե կամ գաղտնաբառ';
   $empty='Լրացրեք բոլոր դաշտերը';
   
}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   $fail='Wrong email or password';
   $empty='All fields are required';
 
}	

 function test_input( $data):string {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        
}
 $email = test_input($_REQUEST["email"]); 
 $pass=test_input($_POST['pass']);
 

if(empty($pass)||empty($email)){
    echo $model->output($empty,false);
     die; 
}

 

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo $model->output($invalid_email,false);
     die; 
 }  
 
$user_id=$model->check_cv_student($email,$pass);

if(!$user_id){
    echo $model->output($fail,false);
    die;
}
else{
  $_SESSION['cv_user_id']=$user_id;
  echo $model->output($user_id,true);
    die;
}






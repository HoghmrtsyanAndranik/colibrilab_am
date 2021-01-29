<?php

include('model.php');

$LANG=file_get_contents('session.php');

if($LANG=='ARM'){
    $invalid_email="Գոյություն չունեցող էլ․հասցե";
    $require="Լրացրեք դաշտը";
    $success='Շնորհակալություն բաժանորդագրվելու համար';
}
elseif($LANG=='ENG'){
    $invalid_email="Invalid email address";
    $require="Please enter a value";
    $success='Thank you for subscribing';
}

if(empty($_POST['email'])){
    $arr=['message'=>$require,'success'=>false];
    echo json_encode($arr);
    die;
}
$email=$_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	 $arr=['message'=>$invalid_email,'success'=>false];
     echo json_encode($arr);
     die;
}


$model=new Model;
$model->add_subscriber($email);

$arr=['message'=>$success,'success'=>true];
     echo json_encode($arr);




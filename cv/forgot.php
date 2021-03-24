
<?php

$LANG=file_get_contents('../session.php');
include('model.php');
$model=new Model;

if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $empty='էլ․ փոստը  նշված չէ';

}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   
   $empty='Email field is required';
  
 
  
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
   echo $model->output($invalid_email,false);
   die; 

}
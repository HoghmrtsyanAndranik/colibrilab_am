<?php

include('model.php');
$model=new Model;



  $email = 'abcd@mail.ru'; 
 $pass1='123';



 

 

 

 $user_id=$model->register_cv_student($email,$pass1);
echo $user_id;die;






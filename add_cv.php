<?php

include('model.php');
$model=new Model;
$user_id=file_get_contents('usersession.php');
$action=$_POST['action'];
if($action=='skills'){

  $lang=$_POST['lang'];
  $percent=$_POST['percent'];
  $model->add_skill($user_id,$lang,$percent);
}

if($action=='del_skill'){
  $lang=$_POST['lang']+1;
  $model->del_skill($user_id,$lang);
  
}
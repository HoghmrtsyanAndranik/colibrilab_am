<?php

include('model.php');
$model=new Model;
session_start();
$user_id=$_SESSION['cv_user_id'];
$action=$_POST['action']??false;

if($action=='main'){

    $name=$_POST['name'];
    $profession=$_POST['profession'];
    $about_me=$_POST['about_me'];
    $address=$_POST['address'];
    $phon=$_POST['phon'];
    $cv_email=$_POST['cv_email'];
    $check=0;
    if($_POST['check']=='true')
      $check=1;
  
      

    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $dribble=$_POST['dribble'];
    $github=$_POST['github'];
    $linkedin=$_POST['linkedin'];
    $behance=$_POST['behance'];
    $model->add_main_data($user_id,$name,$profession,$about_me,$address,
   	   $phon,$cv_email,$check,$facebook,$twitter,$dribble,$github,$linkedin,$behance);

}

if($action=='skills'){
  $lang=$_POST['lang'];
  $percent=$_POST['percent'];
  $model->add_skill($user_id,$lang,$percent);
}

if($action=='del_skill'){
  $lang=$_POST['lang']+1;
  $model->del_skill($user_id,$lang);
  
}

if($action=='add_update_education'){

 $model->add_update_education(
 	$user_id,
 	$_POST['id'],
 	$_POST['specialization'],
 	$_POST['education'],
 	$_POST['description'],
 	$_POST['begin_month'],
 	$_POST['begin_year'],
 	$_POST['end_month'],
 	$_POST['end_year']
 );
  
}
if($action=='del_education'){
 $model->delete_education($_POST['id']);
}

if($action=='add_language'){
   $model->add_language($user_id,$_POST['lang']);
}
if($action=='del_lang'){
   $model->delete_language($_POST['id']);
}
if($action=='add_experiance'){
   $title=$_POST['title'];
   $company=$_POST['company'];
   $start_year=$_POST['start_year'];
   $start_month=$_POST['start_month'];
   $end_year=$_POST['end_year'];
   $end_month=$_POST['end_month'];
   $description=$_POST['description'];
   $model->add_experiance($user_id,$title,$company,$description,$start_month,$start_year,$end_month,$end_year);
}
if($action=='update_experiance'){
   $title=$_POST['title'];
   $company=$_POST['company'];
   $start_year=$_POST['begin_year'];
   $start_month=$_POST['begin_month'];
   $end_year=$_POST['end_year'];
   $end_month=$_POST['end_month'];
   $description=$_POST['description'];
   $id=$_POST['id'];
   echo $model->update_experiance($id,$title,$company,$description,$start_month,$start_year,$end_month,$end_year);
 }

if($action=='del_exp'){

   $model->delete_experiance($_POST['id']);
}


if(isset($_FILES['img'])){
   $imagename=$_FILES['img']['name'];
   copy($_FILES['img']['tmp_name'],'cv_images/'.$imagename);
   $model->add_image($user_id,$imagename);
}



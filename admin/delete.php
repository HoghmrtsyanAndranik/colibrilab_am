<?php
include ('Admin_model.php');
$model=new Admin_model;

$type=$_POST['type'];

if($type=='student'){
   $model->delete_student($_POST['id']);
}
if($type=='cv'){
   $model->delete_student($_POST['id']);
}
if($type=='sub'){
	echo '555';
  $model->delete_subscriber($_POST['id']);
}
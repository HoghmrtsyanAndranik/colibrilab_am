<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method='post'>
       login<input type='text' name="login"><br>
       password<input type='text' name="pass"><br>
            <button name="send" value='666'>LOG IN</button><br>
   </form>
<?php
include('../model.php');
session_start();

if(!isset($_POST['send']))die;
$login=$_POST['login']??false;
$pass=$_POST['pass']??false;
if(!$login||!$pass){
echo "all fields are required";
die;
}
$model=new Model;
$res=$model->check_admin($login,$pass);
if($res){

	$_SESSION['admin']=$login;
	header('location:home.php');
	die;
}
echo "wrong login or password";
die;
?>




</body>
</html>

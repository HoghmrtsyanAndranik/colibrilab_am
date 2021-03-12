<?php


if($_POST['lang']==2)
	file_put_contents('../session.php','ARM');
  
elseif($_POST['lang']==1)
	file_put_contents('../session.php','ENG');
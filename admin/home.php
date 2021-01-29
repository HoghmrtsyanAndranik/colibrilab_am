

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['admin'])){
   header('location:index.php');
    die;
}
include ('../model.php');
$model=new Model;
$students=$model->get_students();
echo '<pre>';


foreach($students as $stud){

     $agree=unserialize($stud['agree_term']);

}

?>
<div class="container">
  <h2>Our students</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Phon</th>
        <th>Email</th>
        <th>Course Type</th>
        <th>Members</th>
        <th>Agree Term</th>
        <th>Comment</th>
      </tr>
    </thead>

    <tbody>
    	<?php
    	$ind=0;
    	$classes=['success',"danger","info","warning","active"];
      foreach($students as $stud){

           $agree=unserialize($stud['agree_term']);
            $agree_term='';
            if($agree[0])
            	$agree_term.='morning,';
            if($agree[1])
            	$agree_term.='daytime,'; 
            if($agree[2])
            	$agree_term.='evening';
            
            $name=$stud['fullname'];
            $age=$stud['age'];
            $phone=$stud['phone'];
            $email=$stud['email'];
            $course_type=$stud['course_type'];
            $confirm_type=$stud['confirm_type'];
            $agree_term=trim($agree_term,',');
            $comment=$stud['comment'];
            $class=$classes[$ind];
            $ind++;
            $ind=$ind%5;

          echo"  <tr class='$class'>
        <td>$name</td>
        <td>$age</td>
        <td>$phone</td>
        <td>$email</td>
        <td>$course_type</td>
        <td>$confirm_type</td>
        <td>$agree_term</td>
        <td>$comment</td>

      </tr>";
       }

?>
  </tbody>
  </table>
</div>

</body>
</html>



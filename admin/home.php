

<!DOCTYPE html>

<?php
include ('header.php');
session_start();
if(!isset($_SESSION['admin'])){
   header('location:index.php');
    die;
}
include ('Admin_model.php');
$model=new Admin_model;
$students=$model->get_students();





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
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
    	<?php
    	$ind=0;
    	$classes=['success',"danger","info","warning","active"];
      foreach($students as $stud){

           $agree=explode(':',$stud['agree_term']);
            $agree_term='';
            if($agree[0])
            	$agree_term.='morning,';
            if($agree[1])
            	$agree_term.='daytime,'; 
            if($agree[2])
            	$agree_term.='evening';
            $id=$stud['id'];
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
        <td><button class='btn btn-danger' id=$id>Delete</button</td>
      </tr>";
       }

?>
  </tbody>
  </table>
</div>
<script>
   $(document).ready(function(){
    $('.btn').click(function(){

       let id=$(this).attr('id');
   
       $.ajax({
           url:'delete.php',
           type:'post',
           data:{
             id:id,type:'student'
           },
           success:function(d){
            //alert(d)
              //location.reload();
            }
        })
   })
 })   
</script>
<?php
include ('footer.php');


?>



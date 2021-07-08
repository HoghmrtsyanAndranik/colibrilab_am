<?php
include ('header.php');
include ('Admin_model.php');
session_start();
if(!isset($_SESSION['admin'])){
   header('location:index.php');
    die;
}

$model=new Admin_model;
$all=$model->get_subscribers();


?>
<div class="container">
  <h2>Subscribers</h2>
  
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
    	<?php
    	$ind=0;
    	$classes=['success',"danger","info","warning","active"];
      foreach($all as $sub){
             $id = $sub['id'];
            $email = $sub['email'];
            $class=$classes[$ind];
            $ind++;
            $ind=$ind%5;

          echo"  <tr class='$class'>
        <td>$id</td>
       
        <td>$email</td>
        
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
   alert(id)
       $.ajax({
           url:'delete.php',
           type:'post',
           data:{
             id:id,type:'sub'
           },
           success:function(d){
           alert(d)
              //location.reload();
            }
        })
   })
 })   
</script>
<?php
include ('footer.php');


?>
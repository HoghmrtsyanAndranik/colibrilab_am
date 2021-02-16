<?php


class Model{
    public $host;
    public $username;
    public $password;
    public $db;
    public $conn;

    public function __construct(){

	    if($_SERVER['HTTP_HOST']=='colibrilab.am'){
           $host='db5001377111.hosting-data.io';
           $username='dbu636527';
           $password="Rafoc0l1br!";
           $db="dbs1166098";
        }
        elseif($_SERVER['HTTP_HOST']=='localhost'){
	       $host='localhost';
	       $username='root';
           $password="";
           $db="colibrilab_site";
        }
        $this->conn=mysqli_connect($host,$username,$password,$db);
      

    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

    public function output($message,$flag=true){
         return json_encode(['message'=>$message,'success'=>$flag]);
    }

   
    
    public function register_cv_student($email,$pass){
      $query="INSERT INTO cv_students (email,`password`)
              VALUES('$email','$pass')";
             $res=mysqli_query($this->conn,$query);
             if($res)
              return(mysqli_insert_id($this->conn));
             else
              return false;
    }
 public function check_cv_student($email,$pass){
        $query="SELECT id FROM cv_students where email='$email' and password='$pass'";
        $res=mysqli_query($this->conn,$query);
        if(mysqli_num_rows($res)>0)
          return mysqli_fetch_assoc($res)['id'];
        return false;
 } 
   
public function add_skill($user_id,$lang,$percent){
     $query="SELECT * FROM skills where cv_students_id='$user_id' and language='$lang'";
     $res=mysqli_query($this->conn,$query);
     if(mysqli_num_rows( $res)>0){
           $query="UPDATE skills set language='$lang',percent=$percent where cv_students_id='$user_id' and language='$lang'";
     }
     else{
        $query="INSERT INTO skills (cv_students_id,language,percent)
              VALUES('$user_id','$lang','$percent')";
     }
    $res=mysqli_query($this->conn,$query);
}

public function del_skill($user_id,$lang){
     $query="DELETE FROM skills where cv_students_id='$user_id' and language='$lang'";
     mysqli_query($this->conn,$query);
}
public function get_skills($user_id){
   $query="SELECT * FROM skills where cv_students_id='$user_id'";
   $res=mysqli_query($this->conn,$query);
   if(mysqli_num_rows( $res)>0)
      return mysqli_fetch_all($res,MYSQLI_ASSOC);
  else
   return false;


}

public function add_update_education($user_id,$id,$specialization,$education,$description,$begin_month,$begin_year,$end_month,$end_year){
    if($id==0)
    $query="INSERT INTO education VALUES(null,'$user_id','$specialization','$education','$description','$begin_month','$begin_year','$end_month','$end_year')";
    else
   $query="UPDATE education SET specialization='$specialization',education='$education',description='$description',begin_month='$begin_month',begin_year='$begin_year',end_month='$end_month',end_year='$end_year' WHERE id=$id";

     $res=mysqli_query($this->conn,$query);



}

public function get_educations($user_id){

      $query="SELECT * FROM education where cv_student_id='$user_id'";
      
      $res=mysqli_query($this->conn,$query);
      return mysqli_fetch_all($res,MYSQLI_ASSOC);
}
public function delete_education($id){
       $query="DELETE FROM education where id='$id'";
       mysqli_query($this->conn,$query);
}
public function add_language($user_id,$lang){
   $query="INSERT INTO languages VALUES(null,'$user_id','$lang')";
    $res=mysqli_query($this->conn,$query);
}

public function get_languages($user_id){
   $query="SELECT * FROM languages where cv_students_id='$user_id'";
      $res=mysqli_query($this->conn,$query);
      return mysqli_fetch_all($res,MYSQLI_ASSOC);
}

public function delete_language($id){
      $query="DELETE FROM languages where id='$id'";
       mysqli_query($this->conn,$query);



}
public function add_experiance($user_id,$title,$company,$description,$start_month,$start_year,$end_month,$end_year){
    $query="INSERT INTO experiences VALUES(null,'$user_id','$title','$company','$description','$start_month','$start_year','$end_month','$end_year')";
     $res=mysqli_query($this->conn,$query);
}
public function delete_experiance($id){
    $query="DELETE FROM experiences where id='$id'";
       mysqli_query($this->conn,$query);
}
public function get_experiances($user_id){
$query="SELECT * FROM experiences where cv_students_id='$user_id'";
      $res=mysqli_query($this->conn,$query);
      return mysqli_fetch_all($res,MYSQLI_ASSOC);
}


public function add_main_data($user_id,$name,$profession,$about_me,$adress,$phon,$cv_email,$check,$facebook,$twitter,$dribble,$github,$linkedin,$behance){
    $query="UPDATE cv_students
             SET name='$name',
             profession='$profession',
             about_me='$about_me',
             address='$adress',
             phon='$phon',
             cv_email='$cv_email',
             published='$check'
             WHERE id='$user_id'";
    $res=mysqli_query($this->conn,$query);

 $query="SELECT * FROM connections where cv_students_id='$user_id'";
     $res=mysqli_query($this->conn,$query);
     if(mysqli_num_rows( $res)>0){
           $query="UPDATE connections
             SET facebook='$facebook',
                 twitter='$twitter',
                 dribble='$dribble',
                 github='$github',
                 linkedin='$linkedin',
                 behance='$behance'
             WHERE cv_students_id='$user_id'";
     }
     else{
        $query="INSERT INTO connections (cv_students_id,facebook,twitter,dribble,github,linkedin,behance)
              VALUES('$user_id','$facebook','$twitter','$dribble','$github','$linkedin','$behance')";
     }
    $res=mysqli_query($this->conn,$query);


 

}



public function get_main_data($user_id){
    $query="SELECT * FROM cv_students where id='$user_id'";
    $res=mysqli_query($this->conn,$query);
    return mysqli_fetch_assoc($res);


}
public function add_image($user_id,$imagename){
     $query="UPDATE cv_students
             SET image='$imagename'
             WHERE id='$user_id'";
    $res=mysqli_query($this->conn,$query);


}
public function get_connections($user_id){
     $query="SELECT * FROM connections where cv_students_id='$user_id'";
    $res=mysqli_query($this->conn,$query);
    return mysqli_fetch_assoc($res);

}

}







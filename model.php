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

    public function register_student($name,$age,$phone,$course_type,$confirm_type,$email,$all_terms,$comment){
         $query="INSERT INTO students (fullname,age,phone,course_type,confirm_type,email,agree_term,`comment`)
              VALUES('$name','$age','$phone','$course_type','$confirm_type','$email','$all_terms','$comment')";
             $res=mysqli_query($this->conn,$query);
             if($res)
             	return(mysqli_insert_id($this->conn));
             else
              return false;
    }
    public function update_student($id){
       $query="UPDATE students set mail_sended=1 where id=$id";
        mysqli_query($this->conn,$query);
    }
    public function add_subscriber($email){
         $query="INSERT INTO subscribe (email) 	VALUES ('$email')";
         mysqli_query($this->conn,$query);

    }
    public function check_admin($login,$pass){
        $query="SELECT * FROM admin WHERE login='$login' and password='$pass'";
        $res=mysqli_query($this->conn,$query);
        return mysqli_num_rows($res);


    }
    public function get_students(){
       $query="SELECT * FROM students";
       $res=mysqli_query($this->conn,$query);
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
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

}






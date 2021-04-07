<?php
class Admin_model{
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
        elseif($_SERVER['HTTP_HOST']=='colibrilab.great-site.net'){
           $host='sql307.epizy.com';
           $username='epiz_27420886';
           $password="2BYYivxZ9R";
           $db="epiz_27420886_colibrilab";
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
    public function get_students(){
       $query="SELECT * FROM students";
       $res=mysqli_query($this->conn,$query);
       return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
    public function delete_student($id){
         $query="DELETE FROM students WHERE id='$id'";
         $res=mysqli_query($this->conn,$query);
         $query="DELETE FROM connections WHERE cv_students_id='$id'";
         $res=mysqli_query($this->conn,$query);
         $query="DELETE FROM education WHERE cv_student_id='$id'";
         $res=mysqli_query($this->conn,$query);
         $query="DELETE FROM experiences WHERE cv_students_id='$id'";
         $res=mysqli_query($this->conn,$query);
         $query="DELETE FROM languages WHERE cv_students_id='$id'";
         $res=mysqli_query($this->conn,$query);
         $query="DELETE FROM skiils WHERE cv_students_id='$id'";
         $res=mysqli_query($this->conn,$query);
    }
    public function get_cv_students(){
        $query="SELECT * FROM cv_students";
        $res=mysqli_query($this->conn,$query);
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
    public function get_subscribers(){
        $query="SELECT * FROM subscribe";
        $res=mysqli_query($this->conn,$query);
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
    public function delete_subscriber($id){
        $query="DELETE FROM subscribe WHERE id='$id'";
        $res=mysqli_query($this->conn,$query);
    }
   
  }
<?php

header('Content-Type: text/html; charset=utf-8');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('register_lang.php');
include('model.php');
$model=new Model;

if($LANG=='ARM'){
   $invalid_email="Գոյություն չունեցող էլ․հասցե";
   $success='Դուք հաջողությամբ գրանցվել եք։';
   $fail='Գրանցումը չի կատարվել։';
}
elseif($LANG=='ENG'){
   $invalid_email="Invalid email address";
   $success='You are sign in successfully';
   $fail='You are not sign in successfully';
}	

 function test_input( $data):string {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        
}



// function output($message,$flag=true){
//      return json_encode(['message'=>$message,'success'=>$flag]);
// }


// if($_SERVER['HTTP_HOST']=='colibrilab.am'){
//     $host='db5001377111.hosting-data.io';
//     $username='dbu636527';
//     $password="Rafoc0l1br!";
//     $db="dbs1166098";
// }
// elseif($_SERVER['HTTP_HOST']=='localhost'){
// 	$host='localhost';
// 	$username='root';
//     $password="";
//     $db="colibrilab_site";
// }







 $email = test_input($_REQUEST["email"]); 
        
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo $model->output($invalid_email,false);
     die; 
 }  


$name = test_input($_REQUEST["name"]);
$age = test_input($_REQUEST["age"]);  
$phone = test_input($_REQUEST["phone"]);  
$course_type= test_input($_REQUEST["course_type"]);   
$confirm_type= test_input($_REQUEST["confirm_type"]);   
$agree_term[0]= test_input($_REQUEST["morningtime"]);             
$agree_term[1]=test_input($_REQUEST["daytime"]); 

$agree_term[2]= test_input($_REQUEST["eveningtime"]);

$comment= test_input($_REQUEST["comment"]);                         
$all_terms=implode(':',$agree_term); 

$students_count=(int)$confirm_type;



// $conn=mysqli_connect($host,$username,$password,$db);
// if(!$conn){
//   echo output(mysqli_connect_error($conn),false);
//   die;
// }


// $query="INSERT INTO students (fullname,age,phone,course_type,confirm_type,email,agree_term,`comment`)
// VALUES('$name','$age','$phone','$course_type','$confirm_type','$email','$all_terms','$comment')";


// $res=mysqli_query($conn,$query);
// if(!$res){
//     echo output($fail,false);
//     mysqli_close($conn);
//     die;
// }

$user_id=$model->register_student($name,$age,$phone,$course_type,$confirm_type,$email,$all_terms,$comment);

if(!$user_id){
    echo $model->output($user_id,false);
    die;
}


// echo $model->output($agree_term,true);
// die;
$time="";
if($agree_term[0]=='true')
	$time.="Առավոտյան,";
if($agree_term[1]=='true')
	$time.="Ցերեկային,";
if($agree_term[2]=='true')
	$time.="Երեկոյան";
$time=trim($time,',');
$time.=' ժամեր';
if($LANG=='ENG'){
     $time=str_ireplace(['Առավոտյան','Ցերեկային','Երեկոյան','ժամեր'], ['Morning','Daytime','Evening','hours'],$time);
  }

 $mon=3;
 $month_fee='30 000';
 if($course_type=='Full Stack PHP Development'){
 $course='Html, Css Responsive design, Bootstrap, JavaScript,
         jQuery, Ajax, PHP, MySQL, OOP, MVC, Laravel(additional)';
         $mon=6;

 }
 elseif($course_type=='Front End React Development'){
     $course='Html, CSS, Responsive design, Bootstrap, JavaScript, OOP, jQuery, React.js, Redux';
 }
 elseif($course_type=='Back End PHP Development'){
     $course='PHP, OOP, Ajax, MySQL, MVC, Laravel';
     $month_fee='40 000';
 }
 elseif($course_type=='Full Stack Node Development'){
     $course='Html, CSS, Responsive design, Bootstrap, JavaScript, jQuery, Ajax, Node.js, MongoDB';
 }
 elseif($course_type=='Full Stack Python'){
     $course='Html, CSS, Responsive design, Bootstrap, JavaScript, jQuery, Ajax, Python, MongoDB, Diango';
 }




$html="
<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type' /><!-- Define Charset -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /><!-- Responsive Meta Tag -->
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='x-apple-disable-message-reformatting' />
    <title></title>

</head>
<body leftmargin='0' marginheight='0' marginwidth='0' topmargin='0'  bgcolor='#F2F2F2'>
  <table width='100%'  style='background-image: url(https://i.imgur.com/e6f8Fq3.png);background-size:cover;background-repeat: no-repeat;'>
    <tr>
      <td align='center' width='100%' >
        <table   border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;'>
      <tr>
        <td align='center'>
          <img src='https://i.imgur.com/3kxM3kk.png' width='200' style='Margin-top:50px;display: block;'>
        </td>
        
      </tr>
      <tr>
      
          <td align='center'>
          <h1 style='font-family: sans-serif;font-weight: bold;font-size: 40px;color: #272727;line-height:55px'>$thankyou<br>
           $success</h1>
        </td>
        
      </tr>
      <tr>
        <td align='center'>
          <img src='https://i.imgur.com/bEvPfwS.png' style='display: block;' width='100'>
        </td>
      </tr>
      <tr>
        <td align='center'>
           <p style='font-family: sans-serif;font-weight: bold;font-size: 23px;color: #272727'>$contactyou</p>
        </td>
      </tr>
      <tr>
        <td align='center'> 
          <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;border:1px solid #A6A6A6;border-radius: 10px;Margin-top: 20px;padding: 20px 0' bgcolor='#FFFFFF'>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='border-bottom: 1px solid #A6A6A6'>
                  <tr>
                    <td>
                      <table style='width: 100%;max-width: 900px' align='center'>
                        <tr align='center'>
               <td align='left'><h1 style='color: #31597B;font:bold 25px sans-serif'>$member</h1></td>
              <td rowspan='2' style='color:#272727;font:bold 18px sans-serif;'>
                <table align='center' >
                  <tr>
                    <td> <img src='https://i.imgur.com/L93dOWv.png' style='Margin-right: 10px;display: block;' width='20'></td>
                     <td><p style='Margin: 5px'>$phone</p></td>
                  </tr>
                  <tr>
                    <td> <img src='https://i.imgur.com/3AY8Qd5.png' style='Margin-right: 10px;display: block;' width='20'></td>
                     <td><p style='Margin: 5px'>$email</p></td>
                  </tr>
                </table>
              </td>
            </tr> 
              <tr  align='center'>
                <td align='left'><p  style='color:#272727;font:bold 20px sans-serif'>$name</p></td>
              
            </tr>

                      </table>
                    </td>
                  </tr>

          
          
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                    <td align='leftmargin'><h1 style='color: #31597B;font:bold 25px sans-serif;Margin-top: 30px;'>$aboutcourse</h1> </td>
                    
                  </tr>
                </table>
              </td>
            </tr>
              <tr>
                    <td>
                      <table align='center' bgcolor='#F6FAFF' width='100%' style='border-radius: 10px;width: 100%;max-width: 1050px;padding: 10px;'>
                        <tr>
                          <td>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                     <td><h1 style='font:bold 18px sans-serif'>$course_type</h1></td>
                    
                  </tr>
                  <tr>
                    <td>
                       <p style='color: #707479;font:18px sans-serif'>
                                                  $course
                                              </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                         <tr style='font: 20px sans-serif'>
                                                     <td><p >$courseduration</p></td>
                                                     <td><p style='Margin:6px'>$mon $months</p>
                                                     <p style='Margin:6px'>3 $perweek</p>
                                                     <p style='Margin:6px'>2 $hoursdur</p>
                                                     </td>
                                                  </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td width='70%'>
                            <p style='font: 20px sans-serif'>$members_count</p>
                          </td>
                          <td align='left'><h1 style='font:bold 25px sans-serif;Margin-top:20px;'>$students_count</h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td>
                            <h1 style='color: #31597B;font:bold 25px sans-serif'>$monthpay</h1>
                          </td>
                          <td><h1 style='font:bold 25px sans-serif'>$month_fee $dram</h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
            
          </table>
          
        </td>
      </tr>
    </table>

      </td>
    </tr>

    <tr>
      <td>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;border:1px solid #A6A6A6;border-radius: 10px;Margin-top: 20px;padding: 20px 0' bgcolor='#FFFFFF'>
          <tr>
            <td>
              <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                <tr>
                  <td>
                    <p style='color: #707479;font:18px sans-serif'>$notreplay:</p>
                  </td>
                </tr>
                <tr>
                  <td>
                     <p style='color: #707479;font:18px sans-serif'>$ifquestions</p>
                  </td>
                </tr>
                <tr>
                  <td align='center'>
                    <p style='color: #4F8BFF;font:18px sans-serif'>http://colibrilab.am/
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
    


</body>
</html>";

$ourhtml="<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type' /><!-- Define Charset -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /><!-- Responsive Meta Tag -->
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='x-apple-disable-message-reformatting' />
    <title></title>

</head>
<body leftmargin='0' marginheight='0' marginwidth='0' topmargin='0'  bgcolor='#F2F2F2' >
  <table width='100%'  style='background-image: url(https://i.imgur.com/e6f8Fq3.png);background-size:100% 100%;background-repeat: no-repeat;padding-bottom: 50px;'>
    <tr>
      <td align='center' width='100%' >
        <table   border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;'>
      <tr>
        <td align='center'>
          <img src='https://i.imgur.com/3kxM3kk.png' width='200' style='Margin-top:50px;display: block;'>
        </td>
        
      </tr>
  
      
    
      <tr>
        <td align='center'> 
          <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 1140px;border:1px solid #A6A6A6;border-radius: 10px;Margin-top: 20px;padding: 20px 0' bgcolor='#FFFFFF'>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='border-bottom: 1px solid #A6A6A6'>
                  <tr>
                    <td>
                      <table style='width: 100%;max-width: 900px' align='center'>
                        <tr align='center'>
              <td align='left'><h1 style='color: #31597B;font:bold 25px sans-serif'>$member</h1></td>
              <td rowspan='2' style='color:#272727;font:bold 18px sans-serif;'>
                <table align='center' >
                  <tr>
                    <td> <img src='https://i.imgur.com/L93dOWv.png' style='Margin-right: 10px;display: block;' width='20'></td>
                    <td><p style='Margin: 5px'>$phone</p></td>
                  </tr>
                  <tr>
                    <td> <img src='https://i.imgur.com/3AY8Qd5.png' style='Margin-right: 10px;display: block;' width='20'></td>
                    <td><p style='Margin: 5px'>$email</p></td>
                  </tr>
                </table>
              </td>
            </tr> 
              <tr  align='center'>
              <td align='left'><p  style='color:#272727;font:bold 20px sans-serif'>$name</p></td>
              
            </tr>

                      </table>
                    </td>
                  </tr>

          
          
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                    <td align='leftmargin'><h1 style='color: #31597B;font:bold 25px sans-serif'>$aboutcourse</h1> </td>
                    
                  </tr>
                </table>
              </td>
            </tr>
              <tr>
                    <td>
                      <table align='center' bgcolor='#F6FAFF' width='100%' style='border-radius: 10px;width: 100%;max-width: 1050px;padding: 10px;'>
                        <tr>
                          <td>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                  <tr>
                    <td><h1 style='font:bold 18px sans-serif'>$course_type</h1></td>
                    
                  </tr>
                  <tr>
                    <td>
                      <p style='color: #707479;font:18px sans-serif'>
                       $course
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr style='font: 20px sans-serif'>
                                                     <td><p >$courseduration</p></td>
                                                     <td><p style='Margin:6px'>$mon $months</p>
                                                     <p style='Margin:6px'>3 $perweek</p>
                                                     <p style='Margin:6px'>2 $hoursdur</p>
                                                     </td>
                                                  </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td width='70%'>
                            <p style='font: 20px sans-serif'>$members_count</p>
                          </td>
                          <td align='left'><h1 style='font:bold 25px sans-serif'>$students_count</h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td>
                            <h1 style='color: #31597B;font:bold 25px sans-serif'>$monthpay</h1>
                          </td>
                          <td><h1 style='font:bold 25px sans-serif'>$month_fee $dram<del></del></h1></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                    <tr>
                    <td>
                      <table  border='0' cellpadding='0' cellspacing='0' width='100%' align='center' style='width: 100%;max-width: 900px;'>
                        <tr>
                          <td width='65%'>
                            <p style='font: 20px sans-serif'>$prefered_hours</p>
                          </td>
                          <td align='left' width='35%'>
                          <p>$time</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <table align='center' bgcolor='#F6FAFF' width='100%' style='border-radius: 10px;width: 100%;max-width: 1050px;padding: 10px;font-family: sans-serif;'>
                        <tr>
                          <td align='center'>
                            <h1 style='font:25px sans-serif;color: grey'> $comment_text</h1>
                          </td>
                        </tr>
                        <tr>
                          <td style='padding: 10px;'>
                            <p> $comment</p>
                          </td>
                        </tr>
                        
                      </table>
                    </td>
                  </tr>
            
          </table>
          
        </td>
      </tr>
    </table>

      </td>
    </tr>

  
  </table>
    


</body>
</html>";


//file_put_contents('temp.php', $html);die;


//  $html="Անուն։ $name<br>
// Տարիք։ $age<br>
// Հեռախոս։ $phone<br>
// Էլ․ հասցե։ $email<br>
// Դասընթաց։ $course_type<br>
// Ուսանողների քանակ։  $confirm_type<br>
// Նախնտրելի է։ $time<br>
// Հաղորդագրություն։ $comment <br>";

require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


// Load Composer's autoloader



$mail = new PHPMailer();

$mail->isSMTP();
$mail->CharSet = "UTF-8";
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'hoghmrtsyan.and@gmail.com';
$mail->Password = 'oobjrgtduvjbvnow';
$mail->setFrom('from@example.com', 'Colibrilab');
$mail->addAddress($email,'Colibrilab');
//$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'study';
$mail->msgHTML($html);


                                  // Set mailer to use SMTP
                              // Enable SMTP authentication
                          // SMTP password
                           // Enable TLS encryption, `ssl` also accepted
                                  // TCP port to connect to

                
if($mail->send()) {
 	  //$model->update_student($user_id);
    echo $model->output($success,true);
 }
 else 
    echo $model->output($fail,false);

    $mail1 = new PHPMailer();
    $mail1->isSMTP();
    $mail1->CharSet = "UTF-8";
    $mail1->Host = 'smtp.gmail.com';
    $mail1->Port = 587;
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail1->SMTPAuth = true;
    $mail1->Username = 'hoghmrtsyan.and@gmail.com';
    $mail1->Password = 'oobjrgtduvjbvnow';
    $mail1->setFrom('from@example.com', 'Colibrilab');
     $mail1->addAddress('hoghmrtsyan.and@mail.ru','Colibrilab');
    $mail1->isHTML(true);                                  // Set email format to HTML
    $mail1->Subject = 'study';
    $mail1->Body    = $ourhtml;
    $mail1->send();
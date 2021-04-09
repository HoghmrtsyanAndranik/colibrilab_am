<?php
include('model.php');
include('form_language.php');
session_start();
if(!isset($_SESSION['cv_user_id'])||!isset($_GET['id'])||$_SESSION['cv_user_id']!=$_GET['id']){
    echo '<h3>Please create account and log in</h3>';
	header("Refresh:3; url=../");
	die;
}


$model=new Model;
$user_id=$_SESSION['cv_user_id'];
/////setting my_cv href
if($_SERVER['HTTP_HOST']=='colibrilab.am'){
      $mycv_href="http://colibrilab.am/cv/my_cv?id=$user_id";          
}
elseif($_SERVER['HTTP_HOST']=='colibrilab.great-site.net'){
      $mycv_href="http://colibrilab.great-site.net/cv/my_cv?id=$user_id";     
}
elseif($_SERVER['HTTP_HOST']=='localhost'){
    $mycv_href="http://localhost/colibrilab_am/cv/my_cv?id=$user_id";       
}
//////////////////


$main_data=$model->get_main_data($user_id); 

if(!empty($main_data['image']))
   $src='cv_images/'.$main_data['image'];
else
$src='cv_images/camera.png';
$expeiances=$model->get_experiances($user_id);
$connections=$model->get_connections($user_id);

if($LANG=='ARM'){
    $months=["Հունվար","Փետրվար","Մարտ","Ապրիլ","Մայիս","Հունիս",
               "Հուլիս","Օգոստոս","Սեպտեմբեր","Հոկտեմբեր","Նոյեմբեր","Դեկտեմբեր"];
    $months_end=["Մինչ այժմ","Հունվար","Փետրվար","Մարտ","Ապրիլ","Մայիս","Հունիս",
               "Հուլիս","Օգոստոս","Սեպտեմբեր","Հոկտեմբեր","Նոյեմբեր","Դեկտեմբեր"];           
}
elseif($LANG=='ENG'){
    $months=["January","February","March","April","May","June",
               "July","August","September","October","November","December"]; 
   $months_end=["Until now","January","February","March","April","May","June",
               "July","August","September","October","November","December"];           
}

for($i=date('Y');$i>=1950;$i--)
    $years[]=$i;

$years_end[0]="";
for($i=date('Y');$i>=1950;$i--)
    $years_end[]=$i;
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "css/cv_style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class = "header-text">
		<p class = "text"><?=$create?></p>
	</div>
	
		
	
	<div class = "container">
		<div class = "top-first res">
			<div class = "gluing">
				<i class="fa fa-user" aria-hidden="true"></i>
				<p class ="descript"><?=$personalinfo?></p>
			</div>
			<div class = "gluing res-f">
				<p class = "lng"><?=$cvlanguage?></p>
				<select class = "select-first">
					<?php
					if($LANG=='ARM'){
						$arm_selected='selected';
                        $eng_selected='';
                    }
                    elseif($LANG=='ENG'){
                          $arm_selected='';
                          $eng_selected='selected';
                    }    
					?>
					<option value = "1"<?=$eng_selected?>>English</option>
					<option value = "2"<?=$arm_selected?>>Հայերեն</option>
				</select>
			</div>
		</div>
					<form action="">
		<div class = "body">
			<div class = "gluing res-elev">
				<div class = "add-photo">
				    <form enctype="multipart/form-data">	
				 				<!-- 	<i class="fa fa-camera" class = "add-ph" aria-hidden="true"></i> -->
				 		<?php
				           if(!empty($main_data['image'])){
                               $src='cv_images/'.$main_data['image'];
                               $width='width="120px"';
                           }
                           else{
                               $src='cv_images/camera.png';
                               $width='width="100px"';
                               echo '<p class = "add-ph">'.$addphoto.'</p>';
                               }
                        ?>				
						<input name="img" type="file" id="file1" style="display:none"/>
						<input type="button" id="new_image" class="foto" style="display:none"/>
						<label id="image" for="file1"><img  id="new_img" src="<?=$src?>" <?=$width?> height="100px" style = "border-radius: 100%;"></label>
				    </form>
					
				</div>
			</div>
				<div class = "column">
                     
                    <p class = "aboutinput-f" ><?=$yourcvadressis?> <a href="<?=$mycv_href?>" id="cv_address"><?=$mycv_href?></a></p> 
					<p class = "aboutinput-f"><?=$name?><span class = "ch-red">*</span></p>
					<input type="text" required class = "input-name input vl" value="<?=$main_data['name']?>">
					<p class = "aboutinput"><?=$profession?><span class = "ch-red">*</span></p>
					<input  type="text" required class = "dev input vl" placeholder="<?=$programmer?>"value="<?=$main_data['profession']?>">
				</div>
			</div>
			<div class = "foot">
				<div class = "column">
					<p class = "about"><?=$aboutme?><span class = "ch-red">*</span></p>
					<textarea class = "textarea input vl about-me"placeholder="<?=$introduce?>" required ><?=$main_data['about_me']?></textarea>
					<div class = "empty"></div>
				</div>
			</div>
		</div>
	<!-- skills -->

		<div class = "container">
			<div class = "top">
				<div class = "gluing">
					<i class="fa fa-puzzle-piece" aria-hidden="true"></i>
					<p class ="descript first"><?=$skills?></p>
				</div>
				<div class = "gluing" style = "padding-right:15px;">
					<i class="fa fa-angle-down w" aria-hidden="true"></i>
				</div>
			</div>
			<div class = "all-body-first">
<?php

$skills=$model->get_skills($user_id);

$phpstyle='none';
$php_percent=50;
$laravelstyle='none';
$laravel_percent=50;
$javastyle='none';
$java_percent=50;
if($skills){

   foreach($skills as $sk){
   	switch($sk['language']){
 case 1:
     $phpstyle='block';
     $php_percent=$sk['percent'];
     break;
case 2:
     $laravelstyle='block';
     $laravel_percent=$sk['percent'];
     break;
case 3:
     $javastyle='block';
     $java_percent=$sk['percent'];
     break;     

   	}
  
}
}
?>

    <div class = "body-nn" style="flex-direction: column;">
        <div class = "line-first handle l-one" style="display:<?=$phpstyle?>;" >
            <div class = "gluing">
                <div class = "flex">
                    <p class = "phplaravel">PHP</p>
                    <div class ="percent"><?=$php_percent?>%</div>
                </div>
                <div class = "flex-sec fl" style="left: 166px;top:0px;">
                    <i class="fa fa-times-circle skills x" aria-hidden="true" style="margin-left: 40px;"></i>
                    <i class="fa fa-pencil pen-one" aria-hidden="true" style="display: none;"></i>
                    <i class="fa fa-bars handle" aria-hidden="true"></i>
                </div>
            </div>
            <div class = "no-flex">
                <div class = "chargeline"><div class = "charge" style="width:<?=$php_percent?>% !important"></div>
            </div>
        </div>
            <div class = "empty"></div>
        </div>
        <div class = "line-first handle l-sec" style="display:<?=$laravelstyle?>;">
            <div class = "gluing">
                <div class = "flex">
                    <p class = "phplaravel-sec">Laravel</p>
                    <div class ="percent-sec"><?=$laravel_percent?>%</div>
                </div>
                <div class = "flex-sec fl" style="left: 166px;top:0px;">
                    <i class="fa fa-times-circle skills x" aria-hidden="true"style="margin-left: 40px;"></i>
                    <i class="fa fa-pencil pen-one" aria-hidden="true" style="display: none;"></i>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
            <div class = "no-flex">
                <div class = "chargeline-sec"><div class = "charge-sec" style="width:<?=$laravel_percent?>% !important"></div>
            </div>
        </div>
            <div class = "empty"></div>
        </div>
        <div class = "line-first handle l-th" style="display:<?=$javastyle?>;">
            <div class = "gluing">
                <div class = "flex">
                    <p class = "phplaravel-th">Javascript</p>
                    <div class ="percent-th"><?=$java_percent?>%</div>
                </div>
                <div class = "flex-sec fl" style="left: 166px;top:0px;">
                    <i class="fa fa-times-circle skills x" aria-hidden="true" style="margin-left: 40px;"></i>
                    <i class="fa fa-pencil pen-one" aria-hidden="true" style="display: none;"></i>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>
            <div class = "no-flex">
                <div class = "chargeline-th"><div class = "charge-th" style="width:<?=$java_percent?>% !important"></div>
                </div>
            </div>
            <div class = "empty"></div>
        </div>
    </div>

	<div class = "section-first sfone">
		<div class = "flex-th res-t">
			<div class = "left">
				<p class = "skill"><?=$skill?></p>
				<select class="selector">
					<option value="1">PHP</option>
					<option value="2">Laravel</option>
					<option value="3">Javascript</option>
				</select>
			</div>
			<div class = "right">
				<p class = "level"><?=$level?></p>
				<div class = "flex-th">

				
				<div class = "check"><i class="fa fa-save" aria-hidden="true"></i><span class = "save"><?=$save?></span></div>

					<input type="range" min="1" max="100" value="50" class = "slider">
					<p class = "range-percent">50%</p>
				</div>
			</div>
		</div>
	</div>
	<div class = "buttons res-tr">
		<div class = "center">
			<div class = "skill-plus-first"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-skill"><?=$anotherskill?></p></div>
		</div>
	</div>
</div>
<div class = "container-plus-first"></div>
</div>
<!-- end skills -->

<!-- education -->
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
			<p class ="descript second"><?=$education?></p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	
				
	<div class = "all-body-first">
		 <div class ="body-mini-sec" > 
          <?php

			$education=$model->get_educations($user_id);

			foreach($education as $ed){
			   $id=$ed['id'];
               $begin_month=$ed['begin_month'];
               $begin_year=$ed['begin_year'];
               $end_month=$ed['end_month'];
               $end_year=$ed['end_year'];
               $spec=$ed['specialization'];
               $educ=$ed['education'];
               $desc=$ed['description'];

               
             ?>
<!-- /////////////////////////////// -->
<div class="line-first edu" id="<?=$id?>">
     <div class="flex-col">
     	<p class="th-of-ec"><?=$spec?></p>
     	<div class="interval"><?=$begin_year?> <?=$begin_month?>  - <?=$end_year?>  <?=$end_month?> </div>
     </div>
     <div class="flex-sec res-fr">
     	<i class="fa fa-times-circle x education" aria-hidden="true"></i>
     	<i class="fa fa-pencil pencil pen-one fff" aria-hidden="true"></i>
     	<i class="fa fa fa-bars handleT" aria-hidden="true"></i>
     </div>
     <div class="new-body" style="display: none;">
     	<div class="body-sec show-hide hides update_education"  style="display:block;">
     		<div class="content">
     			<p class="title-input"><?=$specialization?><span class = "ch-red">*</span></p>
     			<input type="text" class="desc-ss" value="<?=$spec?>" placeholder="<?=$web?>">
     		</div>
     		<div class="content">
     			<p class="title-input"><?=$education_text?><span class = "ch-red">*</span></p>
     			<input type="text" class="desc-tt" value="<?=$educ?>" placeholder="<?=$school?>">
     		</div>
     		<div class="content" style="display: flex;">
     			<div class="part-one" style="margin-right: 22px;">
     				<p class="title-input"><?=$startdate?></p>     				<div class="flex-content">
     					<select class="month-nn"  >
     						<?php
                             for($i=0;$i<12;$i++)
                                 if($months[$i]==$begin_month)
                                 	echo "<option value='$begin_month' selected>$begin_month</option>";
                              
                                  else
                                 	 echo  "<option value='$months[$i]'>$months[$i]</option>";
                            
                             	?>
                        </select>
     					<select class="yearr" style="margin-left: 10px;" value="<?=$begin_year?>">
     						<?php
							for($i=0;$i<count($years);$i++)
								if($years[$i]==$begin_year)
							        echo "<option value='$years[$i]' selected>$years[$i]</option>";
							    else
							    	echo "<option value='$years[$i]'>$years[$i]</option>";

						     ?>
     					</select>
     				</div>
     			</div>
     			<div class="part-two">
     				<p class="title-input"><?=$enddate?></p>
     				<div class="flex-content">
     					<select class="monthSS-nn" value="<?=$end_month?>">
     						<?php
     						for($i=0;$i<13;$i++)
                                 if($months_end[$i]==$end_month)
                                 	echo "<option value='$end_month' selected>$end_month</option>";
                              
                                  else
                                 	 echo  "<option value='$months_end[$i]'>$months_end[$i]</option>";
                            ?>
     					</select>
     					 <select class="yearS-nn" style="margin-left: 10px;"value="<?=$end_year?>">
     					 
							<?php
							for($i=0;$i<count($years_end);$i++)
								if($years_end[$i]==$end_year)
							        echo "<option value='$years_end[$i]' selected>$years_end[$i]</option>";
							    else
							    	echo "<option value='$years_end[$i]'>$years_end[$i]</option>";

						     ?>
						  
     					 </select>
     					</div>
     				</div>
     			</div>
     			<div class="content" style="padding-bottom:30px;">
     				<p class="title-input"><?=$description?></p>
     				<textarea class="textarea-ss" type="text" placeholder="Write your text..." style="margin-top: 7px;height:67px;"><?=$desc?></textarea>
     				<input type="hidden" class="edu_id" value="<?=$id?>">
     				<div class="close-secondd">
     					<i class="fa fa-trash" aria-hidden="true"></i>
     					<span class="del education" id=<?=$id?>><?=$delete?></span>
     				</div><div class="check-secondd save_edu" >
     					<i class="fa fa-save" aria-hidden="true"></i>
     					<span class="save "><?=$save?></span>
     				</div>
     			</div>
     		</div>
     	</div>
     </div>





<!-- ///////////////////////////////////		 -->	
		
		<?php
}
?>
</div>
		<div class = "body-sec show-hide s">
			<div class = "content">
				<p class = "title-input"><?=$specialization?><span class = "ch-red">*</span></p>
				<input type = "text" id="specialization" class = "desc-s" placeholder="<?=$web?>">
			</div>
			<div class = "content">
				<p class = "title-input" ><?=$education_text?><span class = "ch-red">*</span></p>
				<input type = "text" id="education" class = "desc-t"placeholder="<?=$school?>">
			</div>
			<div class = "content  res-fv" style = "display: flex;">
				<div class = "part-one" style="margin-right: 22px;">
					<p class = "title-input"><?=$startdate?></p>
					<div class = "flex-content">
						<select class="month">
							<?php
     						for($i=0;$i<12;$i++)
                               echo  "<option value='$months[$i]'>$months[$i]</option>";
                            ?>
						</select> 
						<select class="year" style = "margin-left: 10px;">
							<?php
							for($i=date('Y');$i>=1950;$i--)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
				<div class = "part-two">
					<p class = "title-input"><?=$enddate?></p>
					<div class = "flex-content">
						<select class="monthS">
							<?php
     						for($i=0;$i<13;$i++)
                               echo  "<option value='$months_end[$i]'>$months_end[$i]</option>";
                            ?>
						</select> 
						<select class="yearS" style = "margin-left: 10px;">
							<?php
							echo "<option value=''></option>";
							for($i=date('Y');$i>=1950;$i--)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
			</div>
			<div class = "content" style="padding-bottom:30px;">
				<p class = "title-input"><?=$description?></p>
				<textarea class = "textarea-s" type = "text" placeholder="<?=$write_text?>" style="margin-top: 7px;height:67px;" id="edu_description"></textarea>
				
				<div class = "close-second"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del"><?=$delete?></span></div>
				<div class = "check-second"><i class="fa fa-save" aria-hidden="true"></i><span class = "save edu_save"><?=$save?></span></div>
	
			</div>
		</div>
			<div class = "center" style="margin-top: 10px;">
				<div class = "skill-plus-sec"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-skill-s"><?=$new_education?></p></div>
			</div>
	</div>
	
</div>
<!-- end education -->

<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-language" aria-hidden="true"></i>
			<p class ="descript third"><?=$languages?></p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class = "body-mini">
          <?php
             $languages=$model->get_languages($user_id);
             foreach($languages as $lang){
	           $id=$lang['id'];
	           $language=$lang['language'];
	      ?>


			<div class="line-first-lng" id="<?=$id?>">
	            <p class="lang"><?=$language?></p>
	            <div class="flex-sq">
		           <i class="fa fa-times-circle x del_lang res-te" aria-hidden="true" style="margin-left:40px;"></i>
		           <i class="fa fa-pencil pencil" style="display:none;" aria-hidden="true"></i>
		           <i class="fa fa fa-bars handleS" aria-hidden="true"></i>
	            </div>
            </div>

          <?php
      }
      ?>

		</div>
		<div class = "body show-hide-third" style = "flex-direction: column;">
			<div class = "center-sec">
				<div class = "flex-col"style="height:auto;">
					<p class = "langs"><?=$language?></p>
				</div>
			</div>
			<div class = "input-lng">
				<input type="text" name="" class = "inLng" id = "inLng" maxlength="15" placeholder="<?=$english?>">
				
				<div class = "close-four"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del "><?=$delete?></span></div>
				<div class = "check-four"><i class="fa fa-save" aria-hidden="true"></i><span class = "save"><?=$save?></span></div>
     		 </div>
		</div>

			<div class = "skill-plus-th"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = 'new-lng'><?=$anotherlanguage?></p></div>
			<div class = "empty" style = "padding: 8px;"></div>
		</div>
	</div>
</div>
<!-- ////experiences -->
<div class = "container res-nin">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-suitcase" aria-hidden="true"></i>
			<p class ="descript four"><?=$experiences?></p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class ="body-mini-th">
        <?php

			foreach($expeiances as $exp){
                $id=$exp['id'];

               $job_title=$exp['job_title'];
               $company=$exp['company'];
               $begin_month=$exp['start_month'];
               $begin_year=$exp['start_year'];
               $end_month=$exp['end_month'];
               $end_year=$exp['end_year'];
               $description=$exp['description'];
           
		?>

           <div class="line-first" id="<?=$id?>" >
	<div class="flex-col">
		<p class="th-of-ec"><?=$job_title?></p>
		<div class="interval"><?=$begin_year?> <?=$begin_month?> - <?=$end_year?> <?=$end_month?></div>
	</div>
	<div class="flex-sec">
		<i class="fa fa-times-circle x exp_del" aria-hidden="true"></i>
		<i class="fa fa-pencil pencil pen-one fff" aria-hidden="true"></i>
		<i class="fa fa fa-bars handleF" aria-hidden="true"></i>
	</div>
	<div class="new-body">
		<div class="body-sec show-hide hides" style="display:block;">
			<div class="content">
				<p class="title-input"><?=$jobtitle?><span class = "ch-red">*</span></p>
				<input type="text" class="desc-ss" value="<?=$job_title?>" placeholder="<?=$web?>">
				
			
				
			</div>
			<div class="content">
				<p class="title-input"><?=$company?><span class = "ch-red">*</span></p>
				<input type="text" class="desc-tt" value="<?=$company?>" placeholder="<?=$school?>">
			</div>
			<div class="content" style="display: flex;">
				<div class="part-one" style="margin-right: 22px;">
					<p class="title-input"><?=$startdate?></p>
					<div class="flex-content">
						<select class="month-nn">
								<?php
                                 for($i=0;$i<12;$i++)
                                 if($months[$i]==$begin_month)
                                 	echo "<option value='$begin_month' selected>$begin_month</option>";
                              
                                  else
                                 	 echo  "<option value='$months[$i]'>$months[$i]</option>";
                            
                             	?>
						</select>
						<select class="yearr" style="margin-left: 10px;">
							<?php
							for($i=0;$i<=date('Y')-1950;$i++)
								if($years[$i]==$begin_year)
							        echo "<option value='$years[$i]' selected>$years[$i]</option>";
							    else
							    	echo "<option value='$years[$i]'>$years[$i]</option>";

						     ?>
						</select>
					</div>
				</div>
				<div class="part-two">
					<p class="title-input"><?=$enddate?></p>
					<div class="flex-content">
						<select class="monthSS-nn">
								<?php
                             for($i=0;$i<13;$i++)
                                 if($months_end[$i]==$end_month)
                                 	echo "<option value='$begin_month' selected>$end_month</option>";
                              
                                  else
                                 	 echo  "<option value='$months_end[$i]'>$months_end[$i]</option>";
                            
                             	?>
                             		
                             	</select>
							<select class="yearS-nn" style="margin-left: 10px;">
								<?php
							for($i=0;$i<=date('Y')-1950;$i++)
								if($years_end[$i]==$end_year)
							        echo "<option value='$years_end[$i]' selected>$years_end[$i]</option>";
							    else
							    	echo "<option value='$years_end[$i]'>$years_end[$i]</option>";

						     ?>
							</select>
						</div>
					</div>
				</div>
				<div class="content" style="padding-bottom:30px;">
					<p class="title-input"><?=$description?></p>
					<textarea id="<?=$id?>" class="textarea-ss" type="text" placeholder="Write your text..." style="margin-top: 7px;height:67px;"value="<?=$description?>"><?=$description?></textarea>
                    <!-- <input type="hidden" id="exper_id" value="<?=$id?>"> -->
					<div class="close-secondd">
						<i class="fa fa-trash" aria-hidden="true"></i>
						<span class="del experiences" id=<?=$id?>><?=$delete?></span>
					</div>
					
					<div class="check-secondd save_exp">
						<i class="fa fa-save" aria-hidden="true"></i>
						<span class="save"><?=$save?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

 

<?php } ?>
		</div>




		<div class = "body-sec show-hide-second">
			<div class = "content">
				<p class = "title-input"><?=$jobtitle?><span class = "ch-red">*</span></p>
				<input type = "text" placeholder="<?=$web?>" class = "input-lng-s">
			</div>
			<div class = "content">
				<p class = "title-input"><?=$company?><span class = "ch-red">*</span></p>
				<input type = "text" placeholder="<?=$school?>" class = "input-comp">
			</div>
			<div class = "content res-sx" style = "display: flex;">
				<div class = "part-one" style="margin-right: 22px;">
					<p class = "title-input"><?=$startdate?></p>
					<div class = "flex-content">
						<select class="month-s" >
							<?php

                             echo "<option value='$months[0]' selected >$months[0]</option>";
                              for($i=0;$i<12;$i++){

                            	 echo "<option value='$months[$i]' >$months[$i]</option>";
                              }
                            ?>
						</select> 
						<select class="year-s" style = "margin-left: 10px;">

							<?php

							for($i=date('Y');$i>=1950;--$i)
							   echo "<option value=$i>$i</option>";
						     ?>
							
						</select>
					</div>
				</div>
				<div class = "part-two">
					<p class = "title-input"><?=$enddate?></p>
					<div class = "flex-content">
						<select class="monthS-s" value="<?=$months_end[0]?>">
							<?php
                             echo "<option value='$months_end[0]' selected >$months_end[0]</option>";
                             for($i=1;$i<13;$i++){
                            	echo "<option value='$months_end[$i]' >$months_end[$i]</option>";
                            }
                            ?>
						</select> 
						<select class="yearS-s" style = "margin-left: 10px;">
							<?php
							echo "<option value=''></option>";
							for($i=date('Y');$i>=1950;--$i)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
			</div>
			<div class = "content" style = "padding-bottom:30px;">
				<p class = "title-input"><?=$description?></p>
				<textarea class = "textarea-t" type = "text" placeholder="<?=$write_text?>" style="margin-top: 7px;height:67px;"></textarea>
			
				<div class = "close-third"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del"><?=$delete?></span></div>
				<div class = "check-third"><i class="fa fa-save" aria-hidden="true"></i><span class = "save"><?=$save?></span></div>
			</div>
		</div>
			<div class = "center">
				<div class = "skill-plus"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-lng-s"><?=$anotherworkexperience?></p></div>
			</div>
	</div>
</div>
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-phone" aria-hidden="true"></i>
			<p class ="descript"><?=$contacts?></p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class = "content">
			<p class = "title-input"><?=$adress?><span class = "ch-red">*</span></p>
			<input type = "text" placeholder="" required class = "input-adress input vl" value="<?=$main_data['address']?>">
		</div>
		<div class = "content" style = "display: flex;">
			<div class = "part-first">
				<p class = "title-input res-sv" style = "margin-left: 0px;"><?=$phonenumber?><span class = "ch-red">*</span></p>
				<div class = "flex-content"style="margin-top: 5px;">
					<input type="text" required placeholder = "+374 960000" class = "input-numb input vl" value="<?=$main_data['phon']?>">
				</div>
			</div>
			<div class = "part-sec">
				<p class = "title-input res-sv"style = "margin-left: 0px;"><?=$email?><span class = "ch-red">*</span><span id="wrong_email"></span></p>
				<div class = "flex-content" style="margin-top: 5px;">
					<input type="email" required class = "input-email input vl" value="<?=$main_data['email']?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-link" aria-hidden="true"></i>
			<p class ="descript six"><?=$connections_text?></p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first" style="padding: 5px 0px 20px 0px;">
		<div class="first-label">
			<div class="left-flex">
			<img src="img/facebook.svg" class = "linkIcon">
			<p class="link-title">Facebook <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links facebook" value="<?=$connections['facebook']?>"required>
		</div>
		<div class="first-label">
			<div class="left-flex">
			<img src="img/linkedin .svg" class = "linkIcon">
			<p class="link-title">LinkedIn <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links linkedin" value="<?=$connections['linkedIn']?>"required>
		</div>
		<div class="first-label">
			<div class="left-flex">
			<img src="img/twitter .svg" class = "linkIcon">
			<p class="link-title">Twitter <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links twitter" value="<?=$connections['twitter']?>" required>
		</div>
		<div class="first-label">
			<div class="left-flex">
			<img src="img/Dribble.svg" class = "linkIcon">
			<p class="link-title">Dribble <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links dribble"  value="<?=$connections['dribble']?>" required>
		</div>
		<div class="first-label">
			<div class="left-flex">
				<img src="img/Github.svg" class = "linkIcon">
				<p class="link-title">Github <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links github"  value="<?=$connections['github']?>" required>
		</div>
		<div class="first-label">
			<div class="left-flex">
				<img src="img/behance-logo.svg" class = "linkIcon">
				<p class="link-title">Behance <?=$link?></p>
			</div>
			<input type="url" name="" class = "end-links behance"  value="<?=$connections['behance']?>" required>
		</div>

	</div>
</div>
<div class = "container res-ei" style = "background:none;box-shadow: none; position: relative;display: flex;">
	<label class = "label-end">
		<div class="flex-end">
			<?php
            $checked='checked';
         
			if(isset($main_data['published'])){
			if($main_data['published']==0)
					$checked='';
			else 
				$checked='checked';

			}

			?>
			<input type="checkbox" name="" <?=$checked?> class ="checkbox">
			<p class = "text-end"><?=$public_link?></p>
		</div>
		<p class = "text-end-second"><?=$if_public?></p>
	</label>
	<div class = "flex-right">
		<div class="callout">
			<span style = "color:red"><?=$required?></span>
		</div>
		<input type="button" class = "done" value="Done">
	</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.js" integrity="sha512-oFLHZETzSq73qlg3k4OFuVzRiADU9pt13uI7nxpBNPT2WVZBM42Z/2G6BUKWV5vG8exDwyWTftxjd51+A+XG/w==" crossorigin="anonymous"></script>
<script src="js/cv_script.js"></script>
</body>
</html>
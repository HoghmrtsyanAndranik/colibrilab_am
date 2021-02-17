<?php
include('model.php');
include('form_language.php');
session_start();
if(isset($_GET['id']))
	file_put_contents('usersession.php',$_GET['id']);

$model=new Model;
$user_id=file_get_contents('usersession.php');
echo $user_id;
$main_data=$model->get_main_data($user_id); 
if(!empty($main_data['image']))
   $src='cv_images/'.$main_data['image'];
else
$src='cv_images/camera.png';
$expeiances=$model->get_experiances($user_id);
$connections=$model->get_connections($user_id);
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "css/cv_style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


</head>
<body>
	<div class = "header-text">
		<p class = "text">Ստեղծի՛ր քո CV-ն</p>
	</div>
	<div class = "container">
		<div class = "top-first">
			<div class = "gluing">
				<i class="fa fa-user" aria-hidden="true"></i>
				<p class ="descript">Personal Info</p>
			</div>
			<div class = "gluing">
				<p class = "lng">CV Language</p>
				<select class = "select-first">
					<option value = "1">English</option>
					<option value = "2">Русский</option>
				</select>
			</div>
		</div>
					<form action="">
		<div class = "body">
			<div class = "gluing">
				<div class = "add-photo">					<i class="fa fa-camera" class = "add-ph" aria-hidden="true"></i>
					<p class = "add-ph">Add photo</p>
						<input type="file" required name="file" id="file" accept="image/*" onchange="previewImage();"class = "in-img">
						<img class="preview"src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
					</div>
				</div>
				<div class = "column">
					<p class = "aboutinput-f">Name*</p>
					<input type="text" required class = "input-name input vl">
					<p class = "aboutinput">Profession*</p>
					<input  type="text" required class = "dev input vl" placeholder="e.g.Developer">
				</div>
			</div>
			<div class = "foot">
				<div class = "column">
					<p class = "about">A little about me*</p>
					<textarea class = "textarea input vl"placeholder="Introduce yourself" required></textarea>
					<div class = "empty"></div>
				</div>
			</div>
		</div>
	<!-- skills -->

		<div class = "container">
			<div class = "top">
				<div class = "gluing">
					<i class="fa fa-puzzle-piece" aria-hidden="true"></i>
					<p class ="descript first">Skills</p>
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
$laravel_percent=70;
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

				<div class = "body-nn" style = "flex-direction: column;">
					<div class = "line-first handle l-one " style="display:<?=$phpstyle?>;" >
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
							<div class = "chargeline"><div class = "charge"></div>
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
						<div class = "chargeline-sec"><div class = "charge-sec"></div>
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
					<div class = "chargeline-th"><div class = "charge-th"></div>
				</div>
			</div>
			<div class = "empty"></div>
		</div>
	</div>
	<div class = "section-first sfone">
		<div class = "flex-th">
			<div class = "left">
				<p class = "skill">Skill</p>
				<select class="selector">
					<option value="1">PHP</option>
					<option value="2">Laravel</option>
					<option value="3">Javascript</option>
				</select>
			</div>
			<div class = "right">
				<p class = "level">Level</p>
				<div class = "flex-th">

				
				<div class = "check"><i class="fa fa-save" aria-hidden="true"></i><span class = "save">Save</span></div>

					<input type="range" min="1" max="100" value="50" class = "slider">
					<p class = "range-percent">50%</p>
				</div>
			</div>
		</div>
	</div>
	<div class = "buttons">
		<div class = "center">
			<div class = "skill-plus-first"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-skill">Add another skill</p></div>
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
			<p class ="descript second">Education</p>
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
<div class="line-first edu">
     <div class="flex-col">
     	<p class="th-of-ec"><?=$spec?></p>
     	<div class="interval"><?=$begin_year?> <?=$begin_month?>  - <?=$end_year?>  <?=$end_month?> </div>
     </div>
     <div class="flex-sec">
     	<i class="fa fa-times-circle x" aria-hidden="true"></i>
     	<i class="fa fa-pencil pencil pen-one fff" aria-hidden="true"></i>
     	<i class="fa fa fa-bars handleT" aria-hidden="true"></i>
     </div>
     <div class="new-body" style="display: none;">
     	<div class="body-sec show-hide hides" style="background-color:#eaeaea;display:block;">
     		<div class="content">
     			<p class="title-input">Specialization*</p>
     			<input type="text" class="desc-ss" value="<?=$spec?>" placeholder="e.g.Web Design">
     		</div>
     		<div class="content">
     			<p class="title-input">Education*</p>
     			<input type="text" class="desc-tt" value="<?=$educ?>" placeholder="e.g.Armenian State University">
     		</div>
     		<div class="content" style="display: flex;">
     			<div class="part-one" style="margin-right: 22px;">
     				<p class="title-input">Start Date</p>
     				<div class="flex-content">
     					<select class="month-nn">
     						<option value="January">January</option>
     						<option value="February">February</option>
     						<option value="March">March</option>
     						<option value="April">April</option>
     						<option value="May">May</option>
     						<option value="June">June</option>
     						<option value="July">July</option>
     						<option value="August">August</option>
     						<option value="September">September</option>
     						<option value="October">October</option>
     						<option value="November">November</option>
     						<option value="December">December</option>
     					</select>
     					<select class="yearr" style="margin-left: 10px;">
     						<option value="2021">2021</option>
     						<option value="2020">2020</option>
     					</select>
     				</div>
     			</div>
     			<div class="part-two">
     				<p class="title-input">End Date</p>
     				<div class="flex-content">
     					<select class="monthSS-nn">
     						<option value="January">January</option>
     						<option value="February">February</option>
     						<option value="March">March</option>
     						<option value="April">April</option>
     					</select>
     					 <select class="yearS-nn" style="margin-left: 10px;">
     					 	<option value="2021">2021</option>
     					 	<option value="2020">2020</option>
     					 	<option value="2019">2019</option>
     					 </select>
     					</div>
     				</div>
     			</div>
     			<div class="content" style="padding-bottom:30px;">
     				<p class="title-input">Description</p>
     				<textarea class="textarea-ss" type="text" placeholder="Write your text..." style="margin-top: 7px;height:67px;">ddddd</textarea>
     				<div class="close-secondd">
     					<i class="fa fa-trash" aria-hidden="true"></i>
     					<span class="del">Delete</span>
     				</div><div class="check-secondd">
     					<i class="fa fa-save" aria-hidden="true"></i>
     					<span class="save">Save</span>
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
				<p class = "title-input">Specialization*</p>
				<input type = "text" class = "desc-s" placeholder="e.g.Web Design">
			</div>
			<div class = "content">
				<p class = "title-input">Education*</p>
				<input type = "text" class = "desc-t"placeholder="e.g.Armenian State University">
			</div>
			<div class = "content" style = "display: flex;">
				<div class = "part-one" style="margin-right: 22px;">
					<p class = "title-input">Start Date</p>
					<div class = "flex-content">
						<select class="month">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select> 
						<select class="year" style = "margin-left: 10px;">
							<?php
							for($i=1950;$i<2022;$i++)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
				<div class = "part-two">
					<p class = "title-input">End Date</p>
					<div class = "flex-content">
						<select class="monthS">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select> 
						<select class="yearS" style = "margin-left: 10px;">
							<?php
							for($i=1950;$i<2022;$i++)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
			</div>
			<div class = "content" style="padding-bottom:30px;">
				<p class = "title-input">Description</p>
				<textarea class = "textarea-s" type = "text" placeholder="Write your text..." style="margin-top: 7px;height:67px;"></textarea>
				
				<div class = "close-second"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del">Delete</span></div>
				<div class = "check-second"><i class="fa fa-save" aria-hidden="true"></i><span class = "save">Save</span></div>
	
			</div>
		</div>
			<div class = "center" style="margin-top: 10px;">
				<div class = "skill-plus-sec"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-skill-s">Add another education</p></div>
			</div>
	</div>
	
</div>
<!-- end education -->

<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-language" aria-hidden="true"></i>
			<p class ="descript third">Languages</p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class = "body-mini">
			<!-- <div class = "line-first">
				<p class = "lang">Armenian
					<div class = "flex-sq">
						<i class="fa fa-times-circle x" aria-hidden="true"></i>
						<i class="fa fa-pencil pencil pen-one" aria-hidden="true"></i>
						<i class="fa fa-bars handleS" aria-hidden="true"></i>
					</div>
				</p>
			</div> -->
		</div>
		<div class = "body show-hide-third" style = "flex-direction: column;">
			<div class = "center-sec">
				<div class = "flex-col"style="height:auto;">
					<p class = "langs">Language</p>
				</div>
			</div>
			<div class = "input-lng">
				<input type="text" name="" class = "inLng" id = "inLng" maxlength="15" placeholder="e.g. English">
				
				<div class = "close-four"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del">Delete</span></div>
				<div class = "check-four"><i class="fa fa-save" aria-hidden="true"></i><span class = "save">Save</span></div>
     		 </div>
			</div>
			<div class = "skill-plus-th"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = 'new-lng'>Add another language</p></div>
			<div class = "empty" style = "padding: 8px;"></div>
		</div>
	</div>
</div>
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-suitcase" aria-hidden="true"></i>
			<p class ="descript four">Experiences</p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class ="body-mini-th">
			<div class = "line-first">
				<div class = "flex-col">
					<p class = "th-of-ec-S">Developer</p>
					<div class ="intervalS">New Media Company, 2013 June - 2017 September</div>
				</div>
				<div class = "flex-sec">
					<i class="fa fa-times-circle x" aria-hidden="true"></i>
					<i class="fa fa-pencil pencil pen-one " aria-hidden="true"></i>
					<i class="fa fa-bars handleS" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class = "body-sec show-hide-second">
			<div class = "content">
				<p class = "title-input">Job Title*</p>
				<input type = "text" placeholder="e.g.Developer" class = "input-lng-s">
			</div>
			<div class = "content">
				<p class = "title-input">Company*</p>
				<input type = "text" placeholder="" class = "input-comp">
			</div>
			<div class = "content" style = "display: flex;">
				<div class = "part-one" style="margin-right: 22px;">
					<p class = "title-input">Start Date</p>
					<div class = "flex-content">
						<select class="month-s">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select> 
						<select class="year-s" style = "margin-left: 10px;">

							<?php
							for($i=1950;$i<2022;$i++)
							echo "<option value=$i>$i</option>";
						     ?>
							
						</select>
					</div>
				</div>
				<div class = "part-two">
					<p class = "title-input">End Date</p>
					<div class = "flex-content">
						<select class="monthS-s">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select> 
						<select class="yearS-s" style = "margin-left: 10px;">
							<?php
							for($i=1950;$i<2022;$i++)
							echo "<option value=$i>$i</option>";
						     ?>
						</select>
					</div>
				</div>
			</div>
			<div class = "content" style = "padding-bottom:30px;">
				<p class = "title-input">Description</p>
				<textarea class = "textarea-t" type = "text" placeholder="Write your text..." style="margin-top: 7px;height:67px;"></textarea>
			
				<div class = "close-third"><i class="fa fa-trash" aria-hidden="true"></i><span class = "del">Delete</span></div>
				<div class = "check-third"><i class="fa fa-save" aria-hidden="true"></i><span class = "save">Save</span></div>
			</div>
		</div>
			<div class = "center">
				<div class = "skill-plus"><i class="fa fa-plus-circle" aria-hidden="true"></i><p class = "new-lng-s">Add another work experience</p></div>
			</div>
	</div>
</div>
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-phone" aria-hidden="true"></i>
			<p class ="descript">Contacts</p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first">
		<div class = "content">
			<p class = "title-input">Adress*</p>
			<input type = "text" placeholder="" required class = "input-adress input vl">
		</div>
		<div class = "content" style = "display: flex;">
			<div class = "part-first">
				<p class = "title-input" style = "margin-left: 0px;">Phone Number*</p>
				<div class = "flex-content"style="margin-top: 5px;">
					<input type="text" required placeholder = "+374 960000" class = "input-numb input vl">
				</div>
			</div>
			<div class = "part-sec">
				<p class = "title-input"style = "margin-left: 0px;">E-mail*</p>
				<div class = "flex-content" style="margin-top: 5px;">
					<input type="email" required class = "input-email input vl">
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "container">
	<div class = "top">
		<div class = "gluing">
			<i class="fa fa-link" aria-hidden="true"></i>
			<p class ="descript six">Connections</p>
		</div>
		<div class = "gluing" style = "padding-right:15px;">
			<i class="fa fa-angle-down w" aria-hidden="true"></i>
		</div>
	</div>
	<div class = "all-body-first" style="padding: 5px 0px 20px 0px;">
		<div class="first-label">
			<img src="img/facebook.svg" class = "linkIcon">
			<p class="link-title">Facebook link</p>
			<input type="url" name="" class = "end-links" required>
		</div>
		<div class="first-label">
			<img src="img/linkedin .svg" class = "linkIcon">
			<p class="link-title">LinkedIn link</p>
			<input type="url" name="" class = "end-links" style="margin-left: 30px;" required>
		</div>
		<div class="first-label">
			<img src="img/twitter .svg" class = "linkIcon">
			<p class="link-title">Twitter link</p>
			<input type="url" name="" class = "end-links"style="margin-left: 41px;" required>
		</div>
		<div class="first-label">
			<img src="img/Dribble.svg" class = "linkIcon">
			<p class="link-title">Dribble link</p>
			<input type="url" name="" class = "end-links" style="margin-left: 39px;" required>
		</div>
		<div class="first-label">
			<img src="img/Github.svg" class = "linkIcon">
			<p class="link-title">Github link</p>
			<input type="url" name="" class = "end-links" style="margin-left: 41px;" required>
		</div>
		<div class="first-label">
			<img src="img/behance-logo.svg" class = "linkIcon">
			<p class="link-title">Behance link</p>
			<input type="url" name="" class = "end-links" style="margin-left: 29px;" required>
		</div>

	</div>
</div>
<div class = "container" style = "background:none;box-shadow: none; position: relative;display: flex;">
	<label class = "label-end">
		<div class="flex-end">
			<input type="checkbox" name="" checked class ="checkbox">
			<p class = "text-end">This is a public link</p>
		</div>
		<p class = "text-end-second">If the link is public it will ba available to everyone</p>
	</label>
	<div class = "flex-right">
		<div class="callout">
			<span style = "color:red">Please fill out all fields</span>
		</div>
		<input type="button" class = "done" value="Done">
	</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.13.0/Sortable.js" integrity="sha512-oFLHZETzSq73qlg3k4OFuVzRiADU9pt13uI7nxpBNPT2WVZBM42Z/2G6BUKWV5vG8exDwyWTftxjd51+A+XG/w==" crossorigin="anonymous"></script>
<script src="js/cv_script.js"></script>
</body>
</html>
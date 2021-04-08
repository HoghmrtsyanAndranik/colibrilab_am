<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My CV</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!-- 
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-blue.css">
	

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
<?php
 include('model.php');
include('my_cv_language.php');
session_start();
if(!isset($_GET['id'])){
   echo'<h1>404<h1>';
   die;
}

$user_id=$_GET['id'];

$model=new Model;
$published=$model->if_published($user_id);

if(!isset($_SESSION['cv_user_id'])||$_SESSION['cv_user_id']!=$_GET['id'])
if($published=='not published'){
	echo'<h1>CV is not published<h1>';
	die;
}
if($published=='not found'){
	echo'<h1>You are not registrated<h1>';
	die;
}
$user=$model->get_main_data($user_id); 
if(!empty($user['image']))
   $src='cv_images/'.$user['image'];
else
$src='cv_images/camera.png';

$connections=$model->get_connections($user_id);
if($LANG=='ARM'){
  $hi='Ողջույն, ես '.$user['name'].'ն եմ ';
  $edit="Խմբագրել CV-ին ";
}
elseif($LANG=='ENG'){
  $hi="Hi,I am ".$user['name']; 
  $edit="Edit CV"; 
}

//$name=$main_data['name'];
//print_r($main_data)

?>
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>
<?php
if(isset($_SESSION['cv_user_id'])&&$_SESSION['cv_user_id']==$_GET['id'])
   // echo "<a href='form?id=$user_id'><button>To Form</button></a>";
   echo "<a href='form?id=$user_id'><i class='fa fa-pencil penMyCv' aria-hidden='true' title='$edit'></i></a>";
?>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="<?=$src?>" class="img-responsive img-circle tm-border" alt="templatemo easy profile" width="25%">
				<hr>
				<h1 class="tm-title bold shadow"><?=$hi?></h1>
				<h1 class="white bold shadow"><?=$user['profession']?></h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent"><?=$easyprofile?></h3>
			
				<p><?=$user['about_me']?></p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
        
			<div class="skills">
				<h2 class="white"><?=$skills_text?></h2>

				<div class="content">
        <?php
         $skills=$model->get_skills($user_id);
        $page=count($skills)/3;
        if(count($skills)%3)
           $page++;


          $index=0;
       $language=['','PHP','LARAVEL','JAVASCRIPT'];


           for($i=0;$i<$page;$i++){
              echo'<div class = "mySlides fade">';
              for($k=0;$k<3;$k++)
              	if(isset($skills[$index])){
              	?>
              	<strong><?=$language[$skills[$index]['language']]?></strong>
					<span class="pull-right"><?=$skills[$index]['percent']?>%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?=$skills[$index]['percent']?>%;"></div>
			                  </div>
			<?php

					

               $index++;
              }

            echo '</div>'; 
          }
        ?>


				<!-- <div class = "mySlides fade">
					<strong>PHP MySQL</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
					<strong>Bootstrap</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
					<strong>Javascript</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
				</div> -->
				<!-- <div class = "mySlides fade">
					<strong>HTML</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
					<strong>CSS</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
					<strong>Laravel</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
				</div> -->

				<!-- <div class = "mySlides fade">
					<strong>Python</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
					<strong>C#</strong>
					<span class="pull-right">70%</span>
						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" 
	                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
						</div>
				</div> -->

			</div>
			</div>

<?php
if(count($skills)>3){

?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<?php }?>
		</div>
	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="slider slider-content">
					<div class="education">

<?php
$educations=$model->get_educations($user_id);
foreach($educations as $ed){
?>


             
			 <div class="slider-item fade">
						<h2 class="white"><?=$education_text?></h2>
							<div class="education-content">
								<h4 class="education-title accent"><?=$ed['specialization']?></h4>
									<div class="education-school">
										<h5><?=$ed['education']?></h5><span></span>
										<h5><?=$ed['begin_year']?> <?=$ed['begin_month']?> - <?=$ed['end_year']?> <?=$ed['end_month']?></h5>
									</div>
								<p class="education-description"><?=$ed['description']?></p>
							</div>
				</div> 
<?php
}
?>

				<!--  <div class="slider-item fade">
						<h2 class="white">Education2</h2>
							<div class="education-content">
								<h4 class="education-title accent">New Web Design</h4>
									<div class="education-school">
										<h5>School of Media</h5><span></span>
										<h5>2030 January - 2034 December</h5>
									</div>
								<p class="education-description">In lacinia leo sed quam feugiat, ac efficitur dui tristique. Ut venenatis, odio quis cursus egestas, nulla sem volutpat diam, ac dapibus nisl ipsum ut ipsum. Nunc tincidunt libero non magna placerat mySlides fadeentum.</p>
							</div>
				</div>  -->
				<!-- <div class="slider-item fade">
						<h2 class="white">Education3</h2>
							<div class="education-content">
								<h4 class="education-title accent">New Web Design</h4>
									<div class="education-school">
										<h5>School of Media</h5><span></span>
										<h5>2030 January - 2034 December</h5>
									</div>
								<p class="education-description">In lacinia leo sed quam feugiat, ac efficitur dui tristique. Ut venenatis, odio quis cursus egestas, nulla sem volutpat diam, ac dapibus nisl ipsum ut ipsum. Nunc tincidunt libero non magna placerat mySlides fadeentum.</p>
							</div>
					</div> -->
				</div>
			</div>

<a class="prev-second" onclick="plusSlidesS(-1)">&#10094;</a>
<a class="next-second" onclick="plusSlidesS(1)">&#10095;</a>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2><?=$languages?></h2>
					<ul>
                        <?php
                          $languages=$model->get_languages($user_id);
                           foreach($languages as $lang){
                           	$l=$lang['language'];
                           	echo "<li>$l</li>";
                           }     
                        ?>
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2><?=$contact?></h2>
					<p><i class="fa fa-map-marker"></i><?=$user['address']?></p>
					<p><i class="fa fa-phone"></i><?=$user['phon']?></p>
					<p><i class="fa fa-envelope"></i><?=$user['email']?></p>
					
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
			<h2 class="white"><?=$experiences?></h2>	
        <?php
           $expeiances=$model->get_experiances($user_id);
           foreach($expeiances as $exp){
       ?>
			 <div class="slider-item-third fade">
				
					<div class="experience-content">
						<h4 class="experience-title accent"><?=$exp['job_title']?></h4>
						<h5><?=$exp['company']?></h5><span></span>
						<h5><?=$exp['start_year']?> <?=$exp['start_month']?> - <?=$exp['end_year']?> <?=$exp['end_month']?></h5>
						<p class="education-description"><?=$exp['description']?></p>
					</div>
				</div> 
<?php
}

?>



				<!-- <div class="slider-item-third fade">
				<h2 class="white">Experiences2</h2>
					<div class="experience-content">
						<h4 class="experience-title accent">Website Development</h4>
						<h5>New Media Company</h5><span></span>
						<h5>2035 January - 2036 April</h5>
						<p class="education-description">Cras porta tincidunt sem, in sollicitudin lorem efficitur ut. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
				</div> -->
				<!-- <div class="slider-item-third fade">
				<h2 class="white">Experiences3</h2>
					<div class="experience-content">
						<h4 class="experience-title accent">Website Development</h4>
						<h5>New Media Company</h5><span></span>
						<h5>2035 January - 2036 April</h5>
						<p class="education-description">Cras porta tincidunt sem, in sollicitudin lorem efficitur ut. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
				</div> -->
			</div>

<a class="prev-third" onclick="plusSlidesT(-1)">&#10094;</a>
<a class="next-third" onclick="plusSlidesT(1)">&#10095;</a>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
<!--				<p>Copyright &copy; 2021 Your Easy Profile</p>-->
				<ul class="social-icons">
                    <?php
                    if(!empty($connections['facebook'])){
                        $href=$connections['facebook'];
                        echo "<li><a href='$href' class='fa fa-facebook'></a></li>";
                    }
                    if(!empty($connections['linkedIn'])){
                        $href=$connections['linkedIn'];
                        echo "<li><a href='$href' class='fa fa-linkedin'></a></li>";
                    }
                    if(!empty($connections['twitter'])){
                        $href=$connections['twitter'];
                        echo "<li><a href='$href' class='fa fa-twitter'></a></li>";
                    }
                    if(!empty($connections['dribble'])){
                        $href=$connections['dribble'];
                        echo "<li><a href='$href' class='fa fa-dribbble'></a></li>";
                    }
                    if(!empty($connections['github'])){
                        $href=$connections['github'];
                        echo "<li><a href='$href' class='fa fa-github'></a></li>";
                    }
                    if(!empty($connections['behance'])){
                        $href=$connections['behance'];
                        echo "<li><a href='$href' class='fa fa-behance'></a></li>";
                    }
                    ?>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}


let slideIndexS = 1;
showSlidesS(slideIndexS);

function plusSlidesS(nn) {
  showSlidesS(slideIndexS += nn);
}

function currentSlideS(nn) {
  showSlidesS(slideIndexS = nn);
}

function showSlidesS(nn) {
  let i;
  let slides = document.getElementsByClassName("slider-item");
  if (nn > slides.length) {
  	slideIndexS = 1
  }    
  if (nn < 1) {
  	slideIndexS = slides.length
  }
  for (i = 0; i < slides.length; i++){
      slides[i].style.display = "none";  
  }
  slides[slideIndexS-1].style.display = "block";  
}



let slideIndexT = 1;
showSlidesT(slideIndexT);

function plusSlidesT(nnn) {
  showSlidesT(slideIndexT += nnn);
}

function currentSlideT(nnn) {
  showSlidesT(slideIndexT = nnn);
}

function showSlidesT(nnn) {
  let i;
  let slides = document.getElementsByClassName("slider-item-third");
  if (nnn > slides.length) {
  	slideIndexT = 1
  }    
  if (nnn < 1) {
  	slideIndexT = slides.length
  }
  for (i = 0; i < slides.length; i++){
      slides[i].style.display = "none";  
  }
  slides[slideIndexT-1].style.display = "block";  
}

</script>
<style type="text/css">
		
.slider{
	position: relative;
}
.content{
  max-width: 500px;
  position: relative;
  margin: auto;
}
.mySlides {
	display: none;
}
.prev:hover, .next:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.prev-second:hover, .next-second:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev-second{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next-second{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.prev-third:hover, .next-third:hover {
  background-color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.prev-third{
  position: absolute;
  right: 85px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.next-third{
  position: absolute;
  right: 50px;
  padding: 7px;
  top: 50px;
  background-color: rgba(255,255,255,0.3);
}
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
  opacity: 1;
}
.slider-item{
	display: none;
}
.slider-item-third{
	display: none;
}

.slider-content{
  position: relative;
}

@keyframes fade {
  from {opacity: 0.4} 
  to {opacity: 1}
}
	</style>
</body>

</html>
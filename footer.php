<div style="display: flex;justify-content: center;padding: 20px 0; height: 0">

<footer>
    <div class = "up">
<div class = "fl">
  <p class="dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ajak">
    <?=$supporters?>
  </p>
  <div class="dropdown-menu d-menu" style="width:325px">
 <div class="drop-content">
     <div>
         <img src="assets/img/user1.jpg" width="40">
     </div>
     <div>
        <p><?=$arevik?></p>
       

     </div>
 </div>  
  <div class="drop-content">
     <div>
         <img src="https://avatars.githubusercontent.com/u/9532499?s=60&amp;u=5cd8a861d4b8289bfcb45961eae953b114f562ec&amp;v=4" width="40">
     </div>
     <div>
        <p><?=$andranik?></p>
      <a href="https://github.com/HoghmrtsyanAndranik">github.com/HoghmrtsyanAndranik</a>

     </div>
 </div> 
  <div class="drop-content">
     <div>
         <img src="https://avatars.githubusercontent.com/u/79191882?v=4" width="40">
     </div>
     <div>
       <p><?=$levon?></p>
        

     </div>
 </div> 
  <div class="drop-content">
     <div>
         <img src="assets/img/user1.jpg" width="40">
     </div>

    <div> 
      <p><?=$syuzanna?></p>
        
       

     </div>
 </div> 

 </div>
  <div class="bor"></div>
  <div class="con">
      <?php
if($LANG=='ARM'){
   $ques_link='questions';
}
elseif($LANG=='ENG'){
    $ques_link='questions_eng';
}



    ?>
      <a href="<?=$ques_link?>"><?=$frequently_questions?></a>
  </div>
  <div class="bor"></div>
  <div class="con">

      <a href=""><?=$discount_policy?></a>
  </div>
</div>
  
 </div>
 <div class = "down">
  
 
  <div class="con">




    


      <a href="<?=$policy_link?>"><?=$security_policy?></a>

  </div>
 </div>
    <p style="color: white; padding-top: 30px; position: relative; " >2021 Colibrilab development company</p>
</footer>
</div>
    <!-- End footer -->


    <script type="text/javascript" src="assets/js/warning.js"></script>
    <!-- Scroll to top -->
    <div class="go-top"><i class="icofont-stylish-up"></i></div>
    <!-- jQuery Min JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- jQuery UI JS -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- Prpper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel Min Js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Jquery Magnific Popup Min Js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Jquery Mixitup Min Js -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- Waypoints Min Js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Jquery CounterUp Min JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/jquery-contact.js"></script>
    <!-- ajaxchimp js -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- easing js -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scrollreveal js -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
     <script src="assets/js/script.js"></script>
    <script>
   $(document).ready(function(){
    $('.dropdown-toggle').click(function(){

         $('.dropdown-menu').attr('x-placement','');


    })

$('.send').click(function(){

   let name=$('#name').val();
   let email=$('#email').val();
   let message=$('#message').val();
   
   $("#form-messages").html("");
 $.ajax({
    url:'sendmail.php',
    type:'post',
    dataType:'json',
    data:{
        name:name,message:message,email:email
    },
    success:function(d){
        if(d.success==true)
           $("#form-messages").css({"color":"green"});
        else
            $("#form-messages").css({"color":"red"});

        $("#form-messages").html(d.message);
    }




 })

})


   $('#subscribe_btn').click(function(){

       let email=$('#mc-email').val();
       
       $.ajax({
           url:'subscribe.php',
           type:'post',
           dataType:'json',
           data:{
             email:email
           },
           success:function(d){
              if(d.success==true)
                 $("#subscribe-result").css({"color":"green"});
              else
                  $("#subscribe-result").css({"color":"red"});

              $("#subscribe-result").html(d.message);
            }
        })
   })

$('.cv_send').click(function(){

   let email=$('#cv_email').val();
   let pass1=$('#cv_pass1').val();
   let pass2=$('#cv_pass2').val();

 $.ajax({
    url:'cv/register.php',
    type:'post',
    dataType:'JSON',
    data:{
        pass1:pass1,pass2:pass2,email:email
    },
    success:function(d){
      
       if(d.success==true)$("#cv_error_text1").css('color','green');
       else $("#cv_error_text1").css('color','red');
       $("#cv_error_text1").html(d.message); 
    }
 })
})


                    



$('.cv_login').click(function(){

   let email=$('#cv_email_login').val();
   let pass=$('#cv_pass_login').val();
 $.ajax({
    url:'cv/login.php',
    type:'post',
  dataType:'JSON',
    data:{
        pass:pass,email:email
    },
    success:function(d){

       if(d.success==true){

      //alert("Էջը ժամանակավորապես անհասանելի է");
        window.location.href = "cv/form?id="+d.message;
       }
        else
         $("#cv_error_text2").html(d.message); 
      
    }




  })

})




})
  </script>
 
</body>

<style>
 footer{
  width: 100%;
  height: 200px;
  background-color: #2d3748;
  display: flex!important;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  font-size: 15px;
}
.drop{
  color: white !important;
  cursor: pointer;
  margin: 0;
}
.d-menu{
  height: 200px;
  width: 200px;
  overflow-y:scroll;
  background: white !important;
}
.drop-content{
  display: flex!important;
  
}

.drop-content a{
  display: block;
  margin: 0 auto;
}
.bor {
  width: 0;
  height: 20px;
  border: solid 1px rgba(255, 255, 255, 0.5);
  margin-left: 20px;
}
.fl{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  margin-top: 30px;
}
.con{
  margin-left:20px;


}
.con a{
    color: white !important;
}
a:hover{
  text-decoration: none !important;
    color: #00000080 !important;
}
.down{
  display: flex;
  justify-content: center;
}   
.show{
    background: none;
}
.drop {
    border:none;
    padding: 0 !important;
    background-image: url(users.png);
    background-repeat: no-repeat;
    background-size: 14px;
    background-position: 28px center;
}


</style>


</html>
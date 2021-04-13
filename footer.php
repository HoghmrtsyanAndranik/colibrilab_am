<div style="display: flex;justify-content: center;padding: 20px 0; height: 0">


 <section class="footer1">
    <div class="footer1-content">
      <!-- <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> -->

      <div class="dropdown ajak hide">
        <div class="  ajakicner" data-toggle="dropdown">
          <p class="aj" style="padding-left:20px"><?=$supporters?></p>
          <p style="padding-left:10px"><i class="fas fa-angle-down"></i></p>
        </div>
          <div class="dropdown-menu box" style="margin: 0 12px" x-placement="none !important">
            <div class="main">
              <div class="img">
              <img src="https://avatars.githubusercontent.com/u/9532499?s=460&u=5cd8a861d4b8289bfcb45961eae953b114f562ec&v=4" style="width: 40px; height: 40px; margin-top: 25px; border-radius: 50%; ">
            </div>
            <div class="cont">
              <p>Անուն Ազգանուն</p>
              <a href="#" class="a">https://github.com/HoghmrtsyanAndranik</a>
            </div>
            </div>
            <div class="main">
              <div class="img">
              <img src="https://avatars.githubusercontent.com/u/9532499?s=460&u=5cd8a861d4b8289bfcb45961eae953b114f562ec&v=4" style="width: 40px; height: 40px; margin-top: 25px; border-radius: 50%; ">
            </div>
            <div class="cont">
              <p>Անուն Ազգանուն</p>
              <a href="#">https://github.com/HoghmrtsyanAndranik</a>
            </div>
            </div>
            <div class="main">
              <div class="img">
              <img src="https://avatars.githubusercontent.com/u/9532499?s=460&u=5cd8a861d4b8289bfcb45961eae953b114f562ec&v=4" style="width: 40px; height: 40px; margin-top: 25px; border-radius: 50%; ">
            </div>
            <div class="cont">
              <p>Անուն Ազգանուն</p>
              <a href="#">https://github.com/HoghmrtsyanAndranik</a>
            </div>
            </div>
            <div class="main">
              <div class="img">
              <img src="https://avatars.githubusercontent.com/u/9532499?s=460&u=5cd8a861d4b8289bfcb45961eae953b114f562ec&v=4" style="width: 40px; height: 40px; margin-top: 25px; border-radius: 50%; ">
            </div>
            <div class="cont">
              <p>Անուն Ազգանուն</p>
              <a href="#">https://github.com/HoghmrtsyanAndranik</a>
            </div>
            </div>
            
        </div>
      </div>
      <?php
      if($LANG=='ARM'){
        $questions_href="questions";
        $discount_href="#";
        $security_href="privacy_policy";
      }
      elseif($LANG=='ENG'){
        $questions_href="questions_eng";
        $discount_href="#";
        $security_href="privacy_policy_eng";
      }
      ?>
      <a href="#" class="border"></a>

      <a href="<?=$questions_href?>" class="hth" style="padding-left: 20px; font-size: 20px"><?=$frequently_questions?></a>
      <a href="#" class="border"></a>
      <a href="<?=$discount_href?>" class="zex" style="padding-left: 20px; font-size: 20px"><?=$discount_policy?></a>
      <a href="<?=$security_href?>" class="anv" style="line-height: 3;padding-left: 20px; font-size: 20px"><?=$security_policy?></a>


    </div>
    <p style="color: white; text-align: center; padding-top: 40px" class="col">2021 ColibriLab development company</p>
  </section>

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
   let agree=0;
   if($('#Iagree').prop('checked')==true)
       agree==1;
 
    
 $.ajax({
    url:'cv/register.php',
    type:'post',
    dataType:'JSON',
    data:{
        pass1:pass1,pass2:pass2,email:email,agree:agree
    },
    success:function(d){
      
       if(d.success==true)$("#cv_error_text1").css('color','green');
       else $("#cv_error_text1").css('color','red');
       $("#cv_error_text1").html(d.message); 
    }
 })
})

$('.forg_next').click(function(){
   let email=$('#cv_email_login_forgot').val();
   $.ajax({
    url:'cv/forgot.php',
    type:'post',
    dataType:'JSON',
    data:{
        email:email
    },
    success:function(d){
console.log(d);
       if(d.success==true)$("#cv_error_text2_forgot").css('color','green');
       else  $("#cv_error_text2_forgot").css('color','red');

      $("#cv_error_text2_forgot").html(d.message);
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
 /*footer{
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
}*/
body{
    margin: 0 auto;
  }
  .col{
    position: absolute;
  }
  .footer1{
    background-color: #2d3748;
    width: 100%;
    height: 250px;
    font-family: sans-serif;
  }
  .footer1 a{
    color: white;
    text-decoration: none;
  }
  .footer1 p{
    color: white;
  }
  .footer1-content{
    width: 550px;
    margin: 0 auto;
    text-align: center;
    padding-top: 52px;
    /*line-height: 2;*/
    font-family: cursive;
  }
  .ajak{
    display: inline-block;
    position: relative;
    cursor: pointer;
    background-color: #2d3748;
    font-size: 20px;

  }
  .box{
    position: absolute;
    display: none;
    background-color: white;
    width: 350px;
    height: 130px;
    overflow-y: scroll;
    scroll-behavior:blue;
  }
  .ajak:onclick .box{
    display: block;

  }
  .footer1-content a:hover{
    color: #DCDCDC;
  }
  .cont>a{
    color:black;
    font-size: 13px;
    text-align: center;
    margin: 10px;
  }
  .cont>a:hover{
    color: #29293d;
  }
  .cont>p{
    margin-left: 10px;
    margin-top:7px;
    position: relative;
    top:15px;
    color: black;
  }
  .main{
    display: flex;
    /*text-align: center;*/
  }
  .box::-webkit-scrollbar-track {
      border: 1px solid #000;
    padding: 2px 0;
      background-color: #404040;
  }

  .box::-webkit-scrollbar {
      width: 8px;
  }

  .box::-webkit-scrollbar-thumb {
      border-radius: 10px;
      box-shadow: inset 0 0 6px rgba(0,0,0,.3);
      background-color: #DCDCDC;
      border: 1px solid #000;
  }
  .img{
    margin-left: 15px;
  }
  .border{
    border:1px solid white; 
    border-radius: 5px; 
    margin-left: 20px
  }
  .ajakicner{
    display:inline-flex;
  }
  @media only screen and (max-width: 320px) {
    .footer1-content{
       width: 626px;

    }
  }  
  @media only screen and (max-width: 700px) {
  /*  .footer1{
      width: 100%
    }*/
    .footer1-content{
      display: flex;
      flex-direction: column;
      font-size: 18px;
      border:none !important;
      text-align: center;
      width: 100% !important;
      margin: 0 auto;
      
  }
  .border{
    border:none !important;
  }
  .hth>a{
    padding-top: 10px;
    font-size: 30px !important;
  }
  .anv{
    font-size: 20px;
  }
  .footer1{
    background-color: #2d3748;
    width: 100%;
    height: 340px;
    font-family: sans-serif;
    overflow: hidden;
    width: 100%;
  }
  .zex{
    padding-top: 10px;
    font-size: 20px;
  }
  .footer1-content{
    position: relative;
    width: 728px;
    top: -30px;
      }
  .col{
    margin-top: -50px;
  }
  .box{
    position: absolute;
    display: none;
    background-color: white;
    width: 350px;
    height: 150px;
    overflow-x: hidden;
    scroll-behavior:gray;
    margin-left: 90px

  }

  .cont>p{
    margin-right: 110px;
    /*margin-top:-50px !important;*/
    position: relative;
    top:15px;
    font-size: 15px;
  }
  .img{
    margin-right:-5px;
  }

}
@media only screen and (max-width: 500px) {
    body{
      margin: 0 auto;
      width: 100%
    }
    .footer{
    width: 100%;
  }
    .footer1-content{
width: 100%;
font-size: 15px !important;
  }
  .box{
    width:300px;
    position: relative; 
    height: 150px;
    margin: 0 -85px;
  }
  .cont{
    width: 200px;
    justify-content: center;
    text-align: center;
    align-items:center;
  }
   .cont>p{
    margin-right: 20px;
    /*margin-top:-50px !important;*/
    position: relative;
    top:20px;
    color:black;
   /* font-size: 15px;
     text-align: center;
     justify-content: center;
     align-items: center;*/
  }
  .cont>a{
    word-break: break-all;
    position: relative;
    top: 15px;
    left:20px
  }
  .col{
    font-size: 15px;
  }
</style>


</html>
<div style="display: flex;justify-content: center;padding: 20px 0; height: 0">


 <section class="footer1">
    <div class="footer1-content">
      <div class="ajak">
        <a href="#" class="aj" style="padding-left:20px">Աջակիցներ</a>
        <a href="#"><i class="fas fa-angle-down"></i></a>
          <div class="box">
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
      
      <a href="#" class="border"></a>
      <a href="#" class="hth" style="padding-left: 20px">ՀՏՀ</a>
      <a href="#" class="border"></a>
      <a href="#" class="zex" style="padding-left: 20px">Զեղչային քաղաքականություն</a>
      <a href="#" style="line-height: 3">Անվտանգության քաղաքականություն</a>
    </div>
    <p style="color: white; text-align: center; padding-top: 40px" class="col">2021 Colibri lab development company</p>
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

       if(d.success==true){

      //alert("Էջը ժամանակավորապես անհասանելի է");
        window.location.href = "cv/form?id="+d.message;
       }
        else
         $("#cv_error_text2").html(d.message); 
      
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
    margin: 0 auto
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
  .footer1-content{
    width: 500px;
    margin: 0 auto;
    text-align: center;
    padding-top: 80px;
    /*line-height: 2;*/
  }
  .ajak{
    display: inline-block;
    position: relative;

  }
  .box{
    position: absolute;
    display: none;
    background-color: white;
    width: 350px;
    height: 150px;
    overflow-y: scroll;
    scroll-behavior:blue;
  }
  .ajak:hover .box{
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
    margin-right: 110px;
    /*margin-top:-50px !important;*/
    position: relative;
    top:15px;
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
@media only screen and (max-width: 600px) {
    .footer1-content{
      display: flex;
      flex-direction: column;
      font-size: 18px;
      border:none !important;
      
  }
  .border{
    border:none !important;
  }
  .hth{
    padding-top: 10px
  }
  .footer1{
    background-color: #2d3748;
    width: 100%;
    height: 300px;
    font-family: sans-serif;
    overflow: hidden;
  }
  .zex{
    padding-top: 10px
  }
  .footer1-content{
    position: relative;
    top: -40px;
  }
  .col{
    margin-top: -20px;
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

</style>


</html>
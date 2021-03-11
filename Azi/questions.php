<!doctype html>
<html lang="en">


<!-- Mirrored from codestar.xyz/demo/eduserve/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 08:35:29 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Slider Revolution Example" />
    <meta name="keywords" content="fullscreen image, grid layout, flexbox grid, transition" />
    <meta name="author" content="ThemePunch" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ColibriLab</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <link rel='stylesheet' href='assets/css/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
    <script type='text/javascript' src='assets/js/revolution.addon.particles.min.js?ver=1.0.3'></script>
    <script type="text/javascript" src="assets/js/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/js/revolution.extension.video.min.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/icons/favicon.html" type="image/x-icon">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i|Titillium+Web:400,400i,600,600i,700,700i,900"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!--================================================================================= 
                                START PRELOADER
    ==================================================================================-->
<!--     <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div> -->
    <!-- END PRELOADER -->
    <!--================================================================================= 
                                Start Navbar Area
    ==================================================================================-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img src="assets/img/logo.png" alt="logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-pricing">Դասընթացներ</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-course">Մենք</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-blog">Պորտֆոլիո</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-teacher">Մեր թիմը</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-testimonial">Կարծիքներ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-contact">Կապ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger  login" href="#eduservices-contact">Գրանցվել</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
 <canvas class="nokey" style="position: absolute;z-index: 0;width: 100%;"></canvas>
<div class="container pt-5 block">
  <div class='text-center mb-5 title'>
    <h1>Հաճախակի տրվող հարցեր</h1>
  </div>
  <div class="accordion-wrapper ">
    <div class="acc-head card p-3 rounded-0 accord-bg accord-bg">
     Դասընթացներին մասնակցելու համար անհրաժե՞շտ են նախնական գիտելիքներ։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
    Դասընթացներին մասնակցելու համար նախնական գիտելիքներ անհրաժեշտ չեն, սակայն ցանկալի է մի փոքր անգլերենի իմացությունը։
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Ո՞ւմ համար են նախատեսված դասընթացները։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     Դասընթացները նախատեսված են ինչպես սկսնակների, այնպես էլ  որոշակի նախնական գիտելիքներ ունեցողների համար։
    </div>
  </div>
  <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Դուք համակարգիչներ տրամադրու՞մ, եք։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     Մեր լսարանները տեխնիկապես ապահովված են։Սակայն ցանկության դեպքում կարող եք դասընթացին մասնակցել Ձեր նոթբուքով։
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Դասընթացի ավարտին հավաստագիր տրամադրու՞մ եք։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     Դասընթացի ավարտից հետո տրամադրում ենք հավաստագիր՝ համապատասխան որակավորմամբ։
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Ձեզ մոտ սովորելուց հետո կարո՞ղ եմ ընդունվել աշխատանքի։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
      Դասընթացն ամբողջությամբ ավարտելուց հետո բարձր առաջադիմությամբ ուսանողներին տրվում է պրակտիկայի հնարավորություն, ինչը բարեհաջող անցնելու դեպքում՝ նաև աշխատանքի հնարավորություն մեր  կամ մեր գործընկեր կազմակերպություններում։
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Դասերն անհատակա՞ն են, թե՞ խմբային։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     Մեզ մոտ դասերն անցկացվում են թե՛ խմբային, թե՛ անհատական տարբերակներով։
    </div>
  </div>
    <div class="accordion-wrapper">
    <div class="acc-head card p-3 rounded-0 accord-bg">
      Ինչպես կարող եմ գրանցվել ծրագրավորման դասերին։
    </div>
    <div class="acc-body rounded-0 accord-bg1">
     Դասընթացներին կարող եք գրանցվել ինչպես զանգահարելով, այնպես էլ կայքի միջոցով գրանցվելով։
  </div>
</div>










  <script type="text/javascript">
      $(document).ready(function(){
  $('.acc-head').click(function(){
    $(this).next().slideToggle(500);
    $(this).toggleClass('active');
  })
})
  </script>


  <!-- Default dropup button -->
        <div style="display: flex;justify-content: center;padding: 20px 0;align-items: center;" class="footer2">
<div>
  <p class="dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Աջակիցներ
  </p>
  <div class="dropdown-menu d-menu">
 <div class="drop-content">
     <div>
         <img src="user.jpg" width="40">
     </div>
     <div>
        <p>Անուն Ազգանուն</p>
        <a href="#">githab.com/name1</a>

     </div>
 </div>  
  <div class="drop-content">
     <div>
         <img src="user.jpg" width="40">
     </div>
     <div>
        <p>Անուն Ազգանուն</p>
        <a href="#">githab.com/name1</a>

     </div>
 </div> 
  <div class="drop-content">
     <div>
         <img src="user.jpg" width="40">
     </div>
     <div>
        <p>Անուն Ազգանուն</p>
        <a href="#">githab.com/name1</a>

     </div>
 </div> 
  <div class="drop-content">
     <div>
         <img src="user.jpg" width="40">
     </div>
     <div>
        <p>Անուն Ազգանուն</p>
        <a href="#">githab.com/name1</a>

     </div>
 </div> 
 </div>
 </div>
 <div class="questions">
     <a href="questions.html" target="_blank">Հաճախակի տրվող հարցեր</a>
 </div>

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
    <script src="scripts/plugin.js"></script>
</body>


</body>


</html>
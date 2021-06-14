<!doctype html>
<html lang="en">
<?php
include('language.php');
if($LANG=='ARM'){
   $is_arm='chosen';
   $is_eng='';
    $policy_link='privacy_policy';
    $discount_href="Discount_policy";
}
elseif($LANG=='ENG'){
    $is_arm='';
    $is_eng='chosen';
    $policy_link='privacy_policy_eng';
    $discount_href="Discount_policy";
}

?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Slider Revolution Example" />
    <meta name="keywords" content="cragravorum,cragravorum ashxatanq,
cragravorum usucum,cragravorum anvchar das@ntacner,cragravorum daser,cragravorum cragir,cragravorum hayastanum,cragravorum kentron,cragravorum vanadzorum,cragravorum dasntacner,web cragravorum dasntacner,ve cragravorum das@ntacner,web cragravorum daser,cragravorum das@ntacner erevanum,
hamakargchayin cragravorum das@ntacner,cragravorum erexaneri hamar,inch e cragravorum,inch e cragravorumy,cragravorum gyumrium,html cragravorum,java cragravorum,cragravorum lezu,cragravorum masin,web cragravorum das@ntacner,cragravorum das@ntacner,cragravorum das@ntacner online,notebook cragravorum,
online cragravorum,php cragravorum,veb tsragravorum,veb cragravorum,web tsragravorum,web cragravorum,ծրագրավորում համալսարան,ծրագրավորում պրակտիկա,web ծրագրավորում,վեբ ծրագրավորում,
python ծրագրավորում,աշխատանք ծրագրավորում,գծային ծրագրավորում,սովորել ծրագրավորում,Ծրագրավորում,ծրագրավորում աշխատանք,ծրագրավորում ուսուցում,ծրագրավորում անվճար դասընթացներ,ծրագրավորման անվճար դասընթացներ,ծրագրավորում դասեր,ծրագրավորում ծրագիր,ծրագրավորման օնլայն դասեր,ծրագրավորում Հայաստանում,ծրագրավորում կենտրոն,ծրագրավորման կենտրոն,ծրագրավորում կենտրոնում,ծրագրավորում Վանաձորում,ծրագրավորում դասընթացներ,ծրագրավորման դասընթացներ,web ծրագրավորում դասընթացներ, web ծրագրավորման դասընթացներ,web ծրագրավորման դասեր,web ծրագրավորում դասեր,veb ծրագրավորում դասեր,veb ծրագրավորման դասեր,veb ծրագրավորման դասընթացներ,veb ծրագրավորում դասընթացներ,ծրագրավորման դասընթացներ Երևանում,ծրագրավորման դասընթացներ Երեվանում,ծրագրավորման դասեր Երևանում,ծրագրավորման դասեր Երեվանում,համակարգչային ծրագրավորման դասընթացներ,ծրագրավորում երեխաների համար,ծրագրավորման դասեր երեխաների համար,ծրագրավորման դասընթացներ երեխաների համար,ինչ է ծրագրավորումը,ծրագրավորում Գյումրիում,html ծրագրավորում,java ծրագրավորում,javascript  ծրագրավորում,ծրագրավորման լեզու,ծրագրավորման մասին,ծրագրավորման դասընթացներ օնլայն,ծրագրավորման օնլայն դասընթացներ,օնլայն ծրագրավորման դասընթացներ,ծրագրավորման դասեր օնլայն,ծրագրավորման օնլայն դասեր,օնլայն ծրագրավորման դասեր,նոթբուք ծրագրավորում,օնլայն ծրագրավորում,ծրագրավորում օնլայն,php ծրագրավորում,
ծրագրավորում php,react ծրագրավորում,ծրագրավորում react,python ծրագրավորում,ծրագրավորում python" />
    <meta name="author" content="ThemePunch" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ColibriLab</title>
    <link rel="icon" href="assets/img/logo.png">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="assets/css/privacy_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
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
    <!-- <link rel="shortcut icon" href="assets/img/icons/favicon.html" type="image/x-icon"> -->
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i|Titillium+Web:400,400i,600,600i,700,700i,900"
        rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Jquery UI CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .dropdown-menu{x-placement:none;} 
    </style>
</head>

<body>

    <!--================================================================================= 
                                START PRELOADER
    ==================================================================================-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <!--================================================================================= 
                                Start Navbar Area
    ==================================================================================-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">
                <img src="assets/img/logo.png" alt="logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eduservices-pricing"><?=$courses?></a>
                    </li>
                   <li class="nav-item">
                        
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eduservices-blog"><?=$portfolio?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eduservices-teacher"><?=$ourteam?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eduservices-testimonial"><?=$opinions?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/#eduservices-contact"><?=$contact?></a>
                    </li>
                    <div class="dropdown">
                    <li class="nav-item other5">
                    <a class="nav-link js-scroll-trigger other6" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$other?>
                    </a>
                     <a class="nav-link js-scroll-trigger ana" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ստեղծել CV
                    </a>
                     <a class="nav-link js-scroll-trigger ana" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Մուտքագրման արագության թեստ
                    </a>
                     <a class="nav-link js-scroll-trigger ana" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Հաճախակի տրվող հարցեր
                    </a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/#eduservices-contact">Կապ</a>
                        <a class="dropdown-item" href="/#tabs">Ստեղծել CV</a>
                        <a class="dropdown-item" href="typing-test/" target="_blank">Մուտքագրման արագության թեստ</a>
                        <a class="dropdown-item" href="questions" target="_blank">Հաճախակի տրվող հարցեր</a>
                    </div>
                    </div>
                        </li>
                    <li class="nav-item buttonik">
                        <a class="nav-link js-scroll-trigger  login" href="reg_form.php"><?=$signup?></a>
                    </li>
                 
                
                    <li class="nav-item" id="last-li">
                        <div class="chooseLang">
                            <div>
                                <span id="es-lang" class="lang am-lang <?=$is_arm?>"
                                    onclick="changeLang('armenian', this)"></span>
                                <span id="en-lang" class="lang en-lang <?=$is_eng?>" onclick="changeLang('english', this)"></span>
                            </div>
                        </div>
                    </li>
            
                </ul>
            </div>
        </div>
    </nav>
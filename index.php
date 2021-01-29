<!doctype html>
<?php




include('language.php');
// $conn=mysqli_connect('localhost','root',"","colibrilab_site");
// $query="select * from students";

// $res=mysqli_query($conn,$query);
// print_r(mysqli_fetch_all($res,MYSQLI_ASSOC));
if($LANG=='ARM'){
   $is_arm='chosen';
   $is_eng='';
}
elseif($LANG=='ENG'){
    $is_arm='';
      $is_eng='chosen';
}

?>

<html lang="en">



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
    <link rel="icon" href="logo.png">
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
            <a class="navbar-brand js-scroll-trigger" href="#">
                <img src="assets/img/logo.png" alt="logo" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-pricing"><?=$courses?></a>
                    </li>
                   <li class="nav-item">
                        
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-blog"><?=$portfolio?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-teacher"><?=$ourteam?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-testimonial"><?=$opinions?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#eduservices-contact"><?=$contact?></a>
                    </li>
                    <li class="nav-item">
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
    <!--================================================================================= 
                                Start Main Banner Area
    ==================================================================================-->
    <div id="eduservices-home">

        <!-- SLIDER EXAMPLE -->
        <section class="example">
            <article class="content">

                <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                    data-alias="particle-effect-one5" data-source="gallery" style="background:#eef0f1;padding:0px; ">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;"
                        data-version="5.4.1">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-10" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut"
                                data-easeout="Power4.easeOut" data-masterspeed="default"
                                data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0"
                                data-saveperformance="off" data-title="Example One" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="../../assets/images/transparent.png" data-bgcolor='#ffffff'' style='
                                    background:#ffffff' alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption  " id="slide-10-layer-4"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full-proportional" data-height="full-proportional"
                                    data-whitespace="nowrap" data-type="image" data-basealign="slide"
                                    data-responsive_offset="off" data-wrapper_class="tp-nopointer" data-responsive="off"
                                    data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="screen"
                                    style="z-index: 5;"><img src="images/1bg.jpg" alt=""
                                        data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                        data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                        width="1920" height="1281" data-no-retina  id="bg_img" "> </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme size-header" id="slide-10-layer-6"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-70','-100','-100','-100']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-wrapper_class="tp-nopointer"
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[-100%];sX:1;sY:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                    style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 700; color: rgba(45,48,50,1);font-family:arial;">
                                    <?=$yourpath?></div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-10-layer-8"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['0','-30','-20','-20']" data-width="['none','none','361','330']"
                                    data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']"
                                    data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer"
                                    data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"y:-20px;sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 700; color:#ff8559;font-family:Poppins;letter-spacing:10px;">
                                    <?=$thebest?></div>

                                <!-- LAYER NR. 4 -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-12" data-transition="fade" data-slotamount="default"
                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeOut"
                                data-easeout="Power4.easeOut" data-masterspeed="default"
                                data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/" data-rotate="0"
                                data-saveperformance="off" data-title="Example Three" data-param1="" data-param2=""
                                data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                                data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="../../assets/images/transparent.png" data-bgcolor='#ffffff' style='
                                    background:#ffffff' alt="" data-bgposition="center center" data-bgfit="cover"
                                    data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption   fullscreenvideo  disabled_lc tp-videolayer"
                                    id="slide-12-layer-12" data-x="0" data-y="0" data-whitespace="nowrap"
                                    data-type="video" data-basealign="slide" data-responsive_offset="off"
                                    data-wrapper_class="tp-nopointer" data-responsive="off"
                                    data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-videocontrols="none" data-videowidth="100%" data-videoheight="100%"
                                    data-videoposter="../../assets/images/tp_vid_clouds-1.jpg"
                                    data-videomp4="../../assets/images/tp_vid_clouds.mp4" data-noposteronmobile="off"
                                    data-videopreload="auto" data-videoloop="loop" data-forceCover="1"
                                    data-aspectratio="16:9" data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="screen"
                                    data-autoplay="on" style="z-index: 5;">
                                    <img src="images/2.jpg" alt=""
                                        data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                        data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                        width="1920" height="1281" data-no-retina id="bg_img1">
                                </div>

                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption   tp-resizeme size-header" id="slide-12-layer-6"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-70','-100','-100','-100']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-wrapper_class="tp-nopointer"
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":300,"frame":"0","from":"y:[-100%];sX:1;sY:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                    data-blendmode="exclusion"
                                    style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 700; color: rgba(255,255,255,0.85);font-family:Poppins;">
                                    <?=$makingpower?></div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption   tp-resizeme" id="slide-12-layer-8"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['1','-30','-20','-20']" data-width="['none','none','361','330']"
                                    data-height="none" data-whitespace="['nowrap','nowrap','normal','normal']"
                                    data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer"
                                    data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"y:-20px;sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" data-blendmode="exclusion"
                                    style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 700; color: #ff8559 !important;font-family:Poppins;letter-spacing:10px;">
                                    <?=$joinus?> </div>

                                <!-- LAYER NR. 12 -->
                                <a class="tp-caption rev-btn  tp-resizeme"
                                    href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=themepunch&license=regular&open_purchase_for_item_id=2751380&purchasable=source"
                                    target="_blank" id="slide-12-layer-10"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['70','40','60','60']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                    data-actions='' data-responsive_offset="on"
                                    data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-20px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bg:rgba(45,48,50,1);bs:solid;bw:0 0 0 0;"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[35,35,35,35]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[35,35,35,35]"
                                    style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(45,48,50,1);font-family:Poppins;background-color:rgba(250,254,144,1);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"></a>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj = jQuery;

                    var revapi4;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_4_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_4_1");
                        } else {
                            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "revolution/js/",
                                sliderLayout: "fullscreen",
                                dottedOverlay: "none",
                                delay: 9000,
                                particles: {
                                    startSlide: "first",
                                    endSlide: "last",
                                    zIndex: "1",
                                    particles: {
                                        number: {
                                            value: 80
                                        },
                                        color: {
                                            value: "#000000"
                                        },
                                        shape: {
                                            type: "circle",
                                            stroke: {
                                                width: 0,
                                                color: "#ffffff",
                                                opacity: 1
                                            },
                                            image: {
                                                src: ""
                                            }
                                        },
                                        opacity: {
                                            value: 0.3,
                                            random: false,
                                            min: 0.25,
                                            anim: {
                                                enable: false,
                                                speed: 3,
                                                opacity_min: 0,
                                                sync: false
                                            }
                                        },
                                        size: {
                                            value: 10,
                                            random: true,
                                            min: 1,
                                            anim: {
                                                enable: false,
                                                speed: 40,
                                                size_min: 1,
                                                sync: false
                                            }
                                        },
                                        line_linked: {
                                            enable: true,
                                            distance: 200,
                                            color: "#000000",
                                            opacity: 0.2,
                                            width: 1
                                        },
                                        move: {
                                            enable: true,
                                            speed: 3,
                                            direction: "none",
                                            random: true,
                                            min_speed: 3,
                                            straight: false,
                                            out_mode: "out"
                                        }
                                    },
                                    interactivity: {
                                        events: {
                                            onhover: {
                                                enable: true,
                                                mode: "bubble"
                                            },
                                            onclick: {
                                                enable: false,
                                                mode: "repulse"
                                            }
                                        },
                                        modes: {
                                            grab: {
                                                distance: 400,
                                                line_linked: {
                                                    opacity: 0.5
                                                }
                                            },
                                            bubble: {
                                                distance: 400,
                                                size: 150,
                                                opacity: 1
                                            },
                                            repulse: {
                                                distance: 200
                                            }
                                        }
                                    }
                                },
                                navigation: {
                                    keyboardNavigation: "off",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    mouseScrollReverse: "default",
                                    onHoverStop: "off",
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: false,
                                        hide_onleave: false,
                                        tmp: '',
                                        left: {
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: -20,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "center",
                                            v_align: "bottom",
                                            h_offset: 20,
                                            v_offset: 0
                                        }
                                    }
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                visibilityLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [868, 768, 960, 720],
                                lazyType: "none",
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "on",
                                stopAfterLoops: 0,
                                stopAtSlide: 1,
                                shuffle: "off",
                                autoHeight: "off",
                                fullScreenAutoWidth: "off",
                                fullScreenAlignForce: "off",
                                fullScreenOffsetContainer: "",
                                fullScreenOffset: "60px",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }

                        RsParticlesAddOn(revapi4);
                    }); /*ready*/
                </script>

            </article>
        </section>

    </div>
    <!-- End Main Banner Area -->

    <!--================================================================================= 
                               Start About us
    ==================================================================================-->
    <section class="boxes-area ">
        <div id="eduservices-about-us ">
            <div class="container ">
                <div class="pulseDiv">
                    <div class="pulseDiv1">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip "> <span style="font-size: 16px;"><?=$comecolibrilab?></span> </div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv2">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip tooltip_orange"><?=$learnprof?></div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv3">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip tooltip_3"><?=$developskills?></div>
                            </div>
                        </span>
                    </div>
                    <div class="pulseDiv4">
                        <span class="pulse">
                            <div class="wrapper">
                                <span class="circleSpan"></span>
                                <div class="tooltip"><?=$becomeprogrammer?></div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="row block">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-box">
                            <i class="icofont-users-alt-3"></i>
                            <h3><?=$training?></h3>
                            <p><?=$training_text?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-box">
                            <i class="icofont-automation"></i>
                            <h3><?=$practice?></h3>
                            <p><?=$practice_text?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-box">
                            <i class="icofont-children-care"></i>
                            <h3><?=$job?></h3>
                            <p><?=$job_text?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About US -->

    <!--================================================================================= 
                                Start Courses Area
    ==================================================================================-->
    <section id="eduservices-course" class="courses-area ptb-100 bg-f9faff">
        <div class="container">
            <div class="section-title">
                <h2><?=$taughtlanguages?></h2>
                <span><?=$introduction?>
                                                               </span>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tab ">
                        <ul class="tabs">
                            <li>
                                <a href="#">
                                    <i class="icofont-file-html5"></i>
                                    <br> HTML/CSS
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-bootstrap"></i>
                                    <br>BOOTSTRAP
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-javascript"></i>
                                    <br> JAVASCRIPT
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-brand-designfloat"></i>
                                    <br> JQUERY
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class='fab fa-react'></i>
                                    <br>REACT
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icofont-file-php"></i>
                                    <br>PHP
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='fab fa-laravel'></i>
                                    <br>LARAVEL
                                </a>
                            </li>
                        </ul>

                        <div class="tab_content">
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="tabs_item_img">
                                        <img src="images/html.png" alt="Course">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12 ">
                                        <div class="tabs_item_content">
                                            <h3>HTML/CSS</h3>
                                            <ul>
                                                <li><?=$html?></li>
                                                <li><?=$css?></li>
                                            </ul>
                                            <a href="#" class="btn " data-toggle="modal" data-target="#exampleModal">
                                                <?=$learnmore?>
                                                
                                            </a>
                                            <div class="modal fade show1" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title " id="exampleModalLabel">Html/Css
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <ul>
                                                                <?=$html_css?>
                                                            </ul>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                        <img src="images/bootstrap.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>Bootstrap</h3>
                                            <p><?=$bootstrap?>։</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal2"><?=$learnmore?></a>
                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal2">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?=$learnmore?></h4>

                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                           <ul>
                                                                <?=$bootstrap_more?>
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="images/js.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>JAVASCRIPT</h3>
                                            <p><?=$java1?>:</p>
                                            <ul>
                                                <li><?=$java2?></li>
                                                <li><?=$java3?></li>
                                                <li><?=$java4?></li>
                                            </ul>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal3">
                                                <?=$learnmore?>
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal3">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">JavaScript </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                <?=$javascript?>
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="images/js.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>JQUERY </h3>
                                            <p><?=$jquery?>։</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal4">
                                                <?=$learnmore?>
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal4">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?=$learnmore?></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                         <ul>
                                                            <?=$jquery_more?> 
                                                         </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="images/react.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>REACT</h3>
                                            <p><?=$react?>:</p>
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal5">
                                                <?=$learnmore?>
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal5">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ReactJs</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <ul>
                                                                <?=$react_more?>
                                                            </ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="images/php.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>PHP </h3>
                                            <p><?=$php?>։</p>

                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal6">
                                                <?=$learnmore?>
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal6">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?=$learnmore?></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                          <ul><?=$php_more?></ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_img">
                                            <img src="images/Laravel.png" alt="Course">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="tabs_item_content">
                                            <h3>Laravel</h3>
                                            <p><?=$laravel?>:
                                            </p>
                                            <!-- <a href="#" class="btn">Start Learn Now</a> -->
                                            <a href="" class="btn" data-toggle="modal" data-target="#myModal7">
                                                <?=$learnmore?>
                                            </a>

                                            <!-- The Modal -->
                                            <div class="modal show1" id="myModal7">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><?=$learnmore?></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                           <ul><?=$laravel_more?></ul>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-link"
                                                                data-dismiss="modal"><?=$close?></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End Courses Area -->

    <!--================================================================================= 
                                Start Fun Facts Area
    ==================================================================================-->
    <section id="eduservices-fun-facts" class="fun-facts-area ptb-100">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".4s">
                    <div class="funFact ">
                        <i class="icofont-document-folder"></i>
                        <h3 class="count">8</h3>
                        <span><?=$year?></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".6s">
                    <div class="funFact">
                        <i class="icofont-users-alt-2"></i>
                        <h3 class="count">2000</h3>
                        <span><?=$student?></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12 wow fadeInUp d-flex justify-content-center w-100" data-wow-delay=".8s">
                    <div class="funFact">
                        <i class="icofont-flag-alt-2"></i>
                        <h3 class="count">150000</h3>
                        <span><?=$lesson?></span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!--
  ================================================================================= 
                                Start pricing section
    ==================================================================================-->
    <section id="eduservices-pricing" class="ptb-100">
        <div class="container">
            <div class="section-title">
                <h2><?=$upcomingcourse?></h2>
                <!-- <span>A modern and unique style</span> -->
            </div>
            <div class="row mt-5">

                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-table  single-pricing-table2 single-pricing-center reveal-bottom-fade">
                         <div class="single-pricing-treangle">
                            <span class=" treangle-span"><?=$beginner?></span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Front-End Web<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price ">
                                <strong>40 000</strong>
                                <br>
                                <sup> <?=$dram?></sup>
                                <sub>/<?=$month?></sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        3 <?=$month?>
                                    </div>

                                </div>
                                <div class="col-6 ">3 <?=$lessonsperweek?> <br> 2 <?=$hours?></div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, OOP, jQuery</li>
                                <li><i class="fa fa-check"></i> React.js </li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn2" href="reg_form.php?course=front"><?=$signup?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 reveal-left-fade">
                    <div class="single-pricing-table single-pricing-table1 single-pricing-center reveal-bottom-fade">
                        <div class="single-pricing-treangle">
                            <span class=" treangle-span"><?=$beginner?></span>
                        </div>
                        <div class="pricing-table-plan pt-3">
                            <h3>Full Stack Web<br> Development </h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price">
                                <strong>40 000</strong> <br>
                                <sup><?=$dram?></sup>
                                <sub>/<?=$month?></sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class="border-right ">
                                        <i class="fa fa-calendar mr-2"></i>
                                        6 <?=$month?>
                                    </div>

                                </div>
                                <div class="col-6 ">3 <?=$lessonsperweek?> <br> 2 <?=$hours?></div>
                            </div>
                            <ul class="list-item text-left pl-4 mt-4">
                                <li><i class="fa fa-check"></i> Html, Css</li>
                                <li><i class="fa fa-check"></i> Responsive design, Bootstrap</li>
                                <li><i class="fa fa-check"></i> JavaScript, jQuery, Ajax</li>
                                <li><i class="fa fa-check"></i> PHP, MySQL, OOP</li>
                                <li><i class="fa fa-check"></i> MVC, Laravel(additional)</li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn ">
                                <a class="btn btn1" href="reg_form.php?course=full"><?=$signup?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 reveal-right-fade">
                    <div class=" single-pricing-table single-pricing-table3 single-pricing-center reveal-bottom-fade">
                        <div class="pricing-table-plan pt-3">
                            <h3>Back-End Php<br> Development</h3>
                        </div>
                        <div class="pricing-table-content">
                            <div class="pricing-content-price">
                                <strong>50 000</strong>
                                <br>
                                <sup><?=$dram?></sup>
                                <sub>/<?=$month?></sub>
                            </div>
                            <div class="row pricing-content-lesson text-light ">
                                <div class="col-6 pt-2 mt-1">
                                    <div class=" border-right">
                                        <i class="fa fa-calendar mr-2"></i>
                                        3 <?=$month?>
                                    </div>

                                </div>
                                <div class="col-6">3 <?=$lessonsperweek?> <br> 2 <?=$hours?></div>
                            </div>
                            <ul class="list-item text-left mt-4 pl-4">
                                <li><i class="fa fa-check"></i> Php, OOP</li>
                                <li><i class="fa fa-check"></i>Ajax, MySQL</li>
                                <li><i class="fa fa-check"></i> MVC</li>
                                <li><i class="fa fa-check"></i> Laravel</li>
                            </ul>
                            <div class="pricing-content-btn pricing-btn">
                                <a class="btn btn3" href="reg_form.php?course=back"><?=$signup?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================================================================================= 
                                Start recent Blog
    ==================================================================================-->
    <section id="eduservices-blog" class="recent-blog-section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2><?=$studentworks?></h2>
            </div>
        </div>
        <div class="news-grids blog-slider reveal-bottom-fade mt-5">
            <div class="grid">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Ani</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/Ani/1/index.html" target="_blank">Html/Css</a></h3>

                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a2.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Ani</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/Ani/2/index.html" target="_blank">Html/Css</a></h3>
                </div>
            </div>
            <div class="grid">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a3.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Karina</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/Karina/index.html" target="_blank">Html/Css/Bootstrap</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a4.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/suren/3/index.html" target="_blank">Html/Css</a></h3>

                </div>
            </div>
            <div class="grid">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a5.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/suren/4/index.html">Html/Css/Bootstrap</a></h3>
                </div>
            </div>
            <div class="grid blog-mt-30">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a6.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Vazgen</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/Vazgen/Homework 14/index.html"
                            target="_blank">Html/Css</a></h3>
                </div>
            </div>
            <div class="grid blog-mt">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a7.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Vazgen</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/HCB/Vazgen/Qnnutyun/index.html" target="_blank">Html/Css</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt blog-mt-30">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a8.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/jQuery/Digital Clock/Clock (2).html"
                            target="_blank">JavaScript/jQuery</a></h3>
                </div>
            </div>
            <div class="grid blog-mt ">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a9.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/jQuery/Mill/index.html" target="_blank">JavaScript/jQuery</a>
                    </h3>
                </div>
            </div>
            <div class="grid blog-mt blog-mt-30">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a11.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Suren</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/jQuery/JQueryExamSur/index.html"
                            target="_blank">JavaScript/jQuery</a></h3>
                </div>
            </div>

            <div class="grid blog-mt ">
                <div class="entry-media">
                    <img src="images/usanoxneri_ashxatanq_img/a10.PNG" alt>
                </div>
                <div class="entry-details">
                    <ul>
                        <li><a href="#"><i class="icofont-user-suited"></i> Areg</a></li>
                        <!-- <li><a href="#"><i class="icofont-ui-clock"></i> 18 Nov 2019</a></li> -->
                    </ul>
                    <div class="separator"></div>
                    <h3><a href="usanoxneri_ashxatanqnery/jQuery/Ej/index.html" target="_blank">JavaScript/jQuery</a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- end recent blog -->

    <!--================================================================================= 
                                Start Our teacher
    ==================================================================================-->
    <section id="eduservices-teacher" class="teacher-inner teacher-color section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2><?=$Ourteam?></h2>
                <span><?=$becomeoneofus?></span>
            </div>
            <div class="row align-items-center teacher-img-text">
                     <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.6s">
                    <div class="teacher teacher-member">
                        <img src="images/img/1.jpg" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3>
                                        <?=$hegine?></h3>
                                    <p>Administrator</p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <li><i class="icofont-facebook"></i></li>
                                        <li><i class="icofont-twitter"></i></li>
                                        <li><i class="icofont-linkedin"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY">
                    <div class="teacher teacher-member">
                        <img src="images/img/Artboard1.jpg" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3><?=$arevik?></h3>
                                    <p>Front End <?=$specialist?></p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <li><i class="icofont-facebook"></i></li>
                                        <li><i class="icofont-twitter"></i></li>
                                        <li><a href="https://www.linkedin.com/in/arevik-hayrapetyan-2602b8204/"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.2s">
                    <div class="teacher teacher-member">
                        <img src="images/img/Andranik.jpg" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3><?=$andranik?></h3>
                                    <p>Back End <?=$specialist?></p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <li><i class="icofont-facebook"></i></li>
                                        <li><i class="icofont-twitter"></i></li>
                                        <li><a href="https://www.linkedin.com/in/andranik-hoghmrtsyan-526a55204/"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center wow flipInY" data-wow-delay="0.4s">
                    <div class="teacher teacher-member">
                        <img src="images/img/image.jpg" class="img-fluid" alt="teacher-member">
                        <div class="overlay">
                            <div class="text">
                                <div>
                                    <h3><?=$syuzanna?></h3>
                                    <p>Front End <?=$specialist?></p>
                                </div>
                                <div>
                                    <ul class="text-center">
                                        <li><i class="icofont-facebook"></i></li>
                                        <li><i class="icofont-twitter"></i></li>
                                        <li><i class="icofont-linkedin"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </section>
    <!--End Our teacher -->
    <!-- CV start-->

<div class="container-fluid cv-block">
<div class="container form-registr">
<div class="text_form">
<h1>Ստեղծիր քո <span>օնլայն CV-ն</span> <br> մի քանի րոպեում</h1>
<p>Մենք կօգնենք քեզ ունենալ պրոֆեսիոնալ և<br> ներկայանալի ռեզյումե:<br>
<span>Ռեզյումեն ստեղծելու համար խնդրում ենք մուտք գործել</span></p>
</div>
<div class="reg_form">
<div class="reg">
<h1>Ստեղծել Հաշիվ</h1>
<p>Քո CV-ն կտեղադրվի colibrilab.am/cv/name-surname էջում</p>
<input type="email" id="cv_email" placeholder="Էլ․հասցե">
<input type="password" id="cv_pass1" placeholder="Գաղտնաբառ">
<input type="password" id="cv_pass2" placeholder="Գաղտնաբառ">
<div class="but">
<button class="btn cv_send"> ՍՏԵՂԾԵԼ </button></div>
<span id="cv_error_text"style="color:red"></span>
<span>Ունե՞ք արդեն հաշիվ․ <a href="#">Մուտք գործեք</a></span>
</div>
</div>
</div>
</div>







<!--=================================================================================
CV END
==================================================================================-->
    <!--================================================================================= 
                                Start testimonial
    ==================================================================================-->
    <div id="eduservices-testimonial" class="p-3 ">

    </div>
    <div class="testimonial ">
        <div class="container ">
            <div class="row justify-content-xl-end justify-content-lg-end justify-content-md-center">
                <div class="col-lg-6 col-md-8">
                    <div class="testimonial-content reveal-right-fade">
                        <div class="testimonial-carousel owl-carousel ">

                            <div class="testimonial-single">
                                <img src="images/img/Alisa.jpg" alt="">
                                <h5><?=$alisa?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$alisatext?>:
                                </p>
                            </div>

                            <div class="testimonial-single">
                                <img src="images/img/narek.jpg" alt="">
                                <h5><?=$nareksardaryan?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$nareksardaryantext?>
                                </p>
                            </div>

                            <div class="testimonial-single">
                                <img src="images/img/NE.jpg" alt="">
                                <h5><?=$narekyazeryan?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$narekyazeryantext?>
                                </p>
                            </div>

                            <div class="testimonial-single">
                                <img src="images/img/levon.jpg" alt="">
                                <h5><?=$levonhakhyan?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$levonhakhyantext?>
                                </p>
                            </div>

                            <div class="testimonial-single">
                                <img src="images/img/hripsime.jpg" alt="">
                                <h5><?=$hripsimemanukyan?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$hripsimemanukyantext?> 👍👍
                                </p>
                            </div>
                            <div class="testimonial-single">
                                <img src="images/img/hovo.jpg" alt="">
                                <h5><?=$hovhanneskhachatryan?></h5>
                                <h6>Web <?=$developer?></h6>
                                <p><?=$hovhanneskhachatryantext?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End testimonial -->

    <section class="container mt-5 pt-5 mb-4">

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box1">
                    <img src="images/Ars.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-box1">
                    <img src="images/Charity.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-box1">
                    <img src="images/1.jpg" alt="">
                </div>
            </div>

        </div>
        </div>
    </section>

    <!--================================================================================= 
                                Start Contact Area
    ==================================================================================-->
    <section id="eduservices-contact" class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2><?=$contactus?></h2>
                <span><?=$followus?></span>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box">
                        <h3><i class="icofont-google-map"></i><?=$addr?></h3>
                        <p><a href="https://goo.gl/maps/Ld22zFYgNaXCDDM29" target="_blank"><?=$yerevan?><br><?=$address?></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-box box2">
                        <h3><i class="icofont-envelope"></i><?=$email?></h3>
                        <p><a href="mailto:#">colibrilabcenter@gmail.com</a></p>
                        <p><a href="mailto:#">n1education.colibri@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-box box3">
                        <h3><i class="icofont-phone"></i> <?=$phone?></h3>
                        <p><a href="callto:37491234367">+374 91 23-43-67</a></p>
                        <p><a href="callto:+37477514631">+374 77 51-46-31</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="get-in-touch">
                        <h3><?=$question?></h3>
                        <p><?=$writeus?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 wow rotateIn" data-wow-offset="10" data-wow-duration="1.5s">
                    <!-- <form id="contactForm"> -->
                    
                     
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="<?=$yourname?>">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="<?=$emailadress?>" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control " cols="30" rows="4" name="message"
                                        id="message" placeholder="<?=$enteryourmessage?>" autocomplete="off"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="button" class="contact-btn btn send"><?=$send?></button>
                                <!--Result notification -->
                                <div id="error-message" class="text-center">
                                 

                                 
                                </div>
                                <div id="form-messages"></div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!--================================================================================= 
         START FOOTER
  ==================================================================================-->
    <footer id="eduservices-footer" class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-wrapper">
                        <div class="section-subscribe section-subscribe-st">

                            <div class="education-subscribe reveal-bottom-fade">
                                <div class="subscribe-content">
                                    <!-- Newsletter title -->
                                    <div class="subscribe-content-inner section-title">
                                        <h2><?=$subscribe?></h2>
                                        <p class="color-white lheight-30 pb40"><?=$bethefirst?></p>
                                    </div>
                                </div>
                                <div class="subscribe-form">
                                    <div class="subscribe-form-inner">
                                        <!-- Newsletter form -->
                                       <!--  <form class="form-inline dv-form" id="mc-form"> -->
                                            <div class="form-group">
                                                <input id="mc-email" type="email" name="EMAIL"
                                                    placeholder="<?=$emailadress?>" class="form-control"> <br>
                                                <button class="btn" name="Subscribe" id="subscribe_btn"
                                                    type="button"><?=$send?></button>
                                            </div>
                                            <br>
                                            <label for="mc-email"></label>
                                            <div id="subscribe-result"></div>
                                       <!--  </form> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Start Social icons -->
                            <ul class="social">
                                <li>
                                    <a href="https://www.linkedin.com/in/colibri-lab-8154b6202/" target="_blank">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/colibri_lab?s=09" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/%D4%BF%D5%B8%D5%AC%D5%AB%D5%A2%D6%80%D5%AB%D4%BC%D5%A1%D5%A2-%D5%B8%D6%82%D5%BD%D5%B8%D6%82%D5%B4%D5%B6%D5%A1%D5%AF%D5%A1%D5%B6-%D5%AF%D5%A5%D5%B6%D5%BF%D6%80%D5%B8%D5%B6-1495050270734324"
                                        target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC89YSNPPcST0LyjRg83FP6Q" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social icons -->
                            <!-- <div class="copyright ">
                                <p>Copyright © 2020 <a href="#"> Codestar</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- Default dropup button -->
<div style="display: flex;justify-content: center;padding: 20px 0">

<p class="dropdown-toggle drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Աջակիցներ
</p>
<div class="dropdown-menu d-menu">
<div class="drop-content">
<div>
<img src="user.jpg" width="50">
</div>
<div>
<p>Անուն Ազգանուն</p>
<a href="#">githab.com/name1</a>

</div>
</div>
<div class="drop-content">
<div>
<img src="user.jpg" width="50">
</div>
<div>
<p>Անուն Ազգանուն</p>
<a href="#">githab.com/name1</a>

</div>
</div>
<div class="drop-content">
<div>
<img src="user.jpg" width="50">
</div>
<div>
<p>Անուն Ազգանուն</p>
<a href="#">githab.com/name1</a>

</div>
</div>
<div class="drop-content">
<div>
<img src="user.jpg" width="50">
</div>
<div>
<p>Անուն Ազգանուն</p>
<a href="#">githab.com/name1</a>

</div>
</div>

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
     <script src="scripts/script.js"></script>
    <script>
   $(document).ready(function(){

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
    url:'do_login_cv_student.php',
    type:'post',
    dataType:'JSON',
    data:{
        pass1:pass1,pass2:pass2,email:email
    },
    success:function(d){

       if(d.success==true){
         window.location.href = "http://localhost/colibrilab_am/cv_form.php?id="+d.message;
       }
        else
         $("#cv_error_text").html(d.message); 
      
    }




 })

})





})
  </script>
 
</body>




</html>
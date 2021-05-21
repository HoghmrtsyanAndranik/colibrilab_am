<?php
include ('header.php');


?>
<div class="container-fluid cv-block" style="margin: 150px auto;">
<div class="container form-registr">
<div class="text_form">
<h1><?=$create_your?><span> <?=$online_cv?></span> <br><?=$few_min?></h1>
<p><?=$we_help?><br><?=$good_cv?><br>
<span><?=$please_sign?></span></p>
</div>

    <div class="reg_form" id="tabs">
        <div class="reg">
            <ul class="tabs-1">

                <li><a href="#tabs-2"><?=$log_in?></a></li>
                <li><a href="#tabs-1"><?=$create_account?></a></li>
            </ul>
<!--            <h1>Ստեղծել Հաշիվ</h1>-->
            <fieldset id="tabs-1">
                <p><?=$your_cv?></p>
                <!-- <form action="" method="post"> -->
                    <input type="email" id="cv_email"  placeholder="<?=$email?>">

                    <input type="password" id="cv_pass1"  placeholder="<?=$password?>">
                    <input type="password" id="cv_pass2"  placeholder="<?=$password?>">
                    <div class="IagreeDiv">
                        <input type="checkbox" name="" id="Iagree" checked>
                        <span><?=$agree?> <a href="<?=$policy_link?>"> <?=$chapter?></a></span>
                    </div>
                    <div class="but">
                        <button class="btn cv_send"> <?=$create?> </button>
                    </div>
              <!--   </form> -->
                <span id="cv_error_text1"></span>
<!--                    <span>Ունե՞ք արդեն հաշիվ․ <a href="#">Մուտք գործեք</a></span>-->
            </fieldset>
            <fieldset id="tabs-2">
<!--                <p>--><?//=$log_in?><!--</p>-->
                <p><?=$your_cv?></p>
                
                    <input type="email" id="cv_email_login" placeholder="<?=$email?>">
                    <input type="password" id="cv_pass_login" placeholder="<?=$password?>">
                    <!--<a href="forgot_password" class="pas">--><p class="pas"><?=$forgot_password?></p></a>
                    <div class="but">
                        <button class="btn cv_login" ><?=$log_in?></button>
                    </div>
                <span id="cv_error_text2"style="color:red"></span>
            </fieldset>
            <fieldset id="tabs-3" class="ui-tabs-panel ui-corner-bottom ui-widget-content">
                <p><?=$forgot_password?></p>
                <input type="email" id="cv_email_login_forgot" placeholder="<?=$email?>">
                <div class="but but_forg">
                    <button class="btn forg_next"><?=$next?></button>
                    <button class="btn forg_cancel"><?=$cancel?></button>
                </div>
                <span id="cv_error_text2_forgot"style="color:red"></span>
            </fieldset>
        </div>
    </div>

</div>
</div>

<?php
include ('footer.php');


?>
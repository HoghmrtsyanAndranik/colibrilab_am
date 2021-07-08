<?php

$LANG=file_get_contents('../session.php');


if($LANG=='ARM'){
   $easyprofile='Կարճ իմ մասին ';
   $skills_text="Հմտություններ";
   $education_text="Կրթություն";
   $languages="Լեզուներ";
   $contact="Կապ";
   $experiences="Աշխատանքային փորձ";

}
elseif($LANG=='ENG'){
   $easyprofile='Easy Profile';
   $skills_text="Skills";
   $education_text="EDUCATION";
   $languages="Languages";
   $contact="Contact";
   $experiences="Experiences";
}
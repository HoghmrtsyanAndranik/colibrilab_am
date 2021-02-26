<?php

$LANG=file_get_contents('../session.php');


if($LANG=='ARM'){
   $public_link='Սա հասանելի հղում է';
   $if_public='Եթե հղումն հասանելի է, ապա այն հասանելի է բոլորի համար';
   $required='Լրացրեք բոլոր դաշտերը';
   $create="Ստեղծի՛ր քո CV-ն";
   $personalinfo="Անձնական տվյալներ";
   $cvlanguage="CV լեզուն";
   $addphoto="Ընտրել նկար";
   $name="Անուն";
   $profession="Մասնագիտություն"; 
   $programmer="Ծրագրավորող";
   $aboutme="Հակիրճ իմ մասին";
   $introduce="Ներկայացրեք ձեզ";
   $skills="Հմտություններ";
   $skill="Հմտություն";
   $level="Մակարդակ";
   $save="Հաստատել";
   $anotherskill="Ավելացնել հմտություն";
   $education="Կրթություն";
   $specialization="Մասնագիտացում";
   $education_text="Կրթություն";
   $startdate="Սկզբի ամսաթիվ";
   $school="օր. Երևանի Պետական Համալսարան";
   $web='օր. վեբ դիզայն';
   $enddate='Վերջի ամսաթիվ';
   $description='Ծանոթություն';
   $write_text='Գրեք ձեր տեքստը...';
   $delete="Ջնջել";
   $new_education="Ավելացնել կրթություն";
   $languages="Լեզուներ";
   $language="Լեզու";
   $english="օր. Անգլերեն";
   $anotherlanguage="Ավելացնել լեզու";
   $experiences="Աշխատանքային փորձը";
   $jobtitle="Պաշտոնը";
   $company="Կազմակերպություն";
   $anotherworkexperience="Այլ կազմակերպություն";
   $contacts="Կապ";
   $adress="Հասցե";
   $phonenumber="Հեռախոս";
   $email="Էլ․ հասցե";
   $connections_text="Սոց․ ցանցեր";
   $link="";
}


elseif($LANG=='ENG'){
   $public_link='This is a public link';
   $if_public='If the link is public it will ba available to everyone';
   $required='Please fill out all fields';
   $create="Create Your CV";
   $personalinfo="Personal Info";
   $cvlanguage="CV Language";
   $addphoto="Add photo";
   $name="Name";
   $profession="Profession";
   $programmer="e.g.Developer";
   $aboutme="A little about me";
   $introduce="Introduce yourself";
   $skills="Skills";
   $skill="Skill";
   $level="Level";
   $save="Save";
   $anotherskill="Add another skill";
   $education="Education";
   $specialization="Specialization";
   $education_text="Education";
   $startdate="Start Date";
   $school="e.g.Yerevan State University";
   $web='e.g.Web Design';
   $enddate='End Date';
   $description='Description';
   $write_text='Write your text...';
   $delete="Delete";
   $new_education="Add another education";
   $languages="Languages";
   $language="Language";
   $english="e.g. English";
   $anotherlanguage="Add another language";
   $experiences="Experiences";
   $jobtitle="Job Title";
   $company="Company";
   $anotherworkexperience="Add another work experience";
   $contacts="Contacts";
   $adress="Adress";
   $phonenumber="Phone Number";
   $email="E-mail";
   $connections_text="Connections";
   $link="link";
}

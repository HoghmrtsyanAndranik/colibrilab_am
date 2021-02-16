<?php

$LANG=file_get_contents('../session.php');


if($LANG=='ARM'){
  $public_link='Սա հասանելի հղում է';
$if_public='Եթե հղումն հասանելի է, ապա այն հասանելի է բոլորի համար';
}


elseif($LANG=='ENG'){
$public_link='This is a public link';
$if_public='If the link is public it will ba available to everyone';




}

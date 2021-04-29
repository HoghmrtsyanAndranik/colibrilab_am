<?php

$LANG=file_get_contents('../session.php');




if($LANG=='ARM'){
    $start="Սկսել թեստը";
    $check_speed="Ստուգիր տեքստ մուտքագրելու արագությունդ";
    $sec="վրկ";   
    $tray="Նորից փորձիր ։)"; 
    $per_min="բառ մեկ րոպեում"; 
    $accuracy="Ճշգրտությունը ՝";
    $try_faster="Փորձիր ավելի արագ!";   
    $share="Կիսվել՝";   
    $try_again="ԿՐԿԻՆ ՓՈՐՁԵԼ";
    $tooslow='Շա՜տ դանդաղ էր ։(';
    $good='Բավականին արագ ես գրում!';
    $superspeed='Սուպեր Արագություն!';
    $word="բառ";
    $wordspermin="բառ մեկ րոպեում`"; 
    $seconds="վայրկյանում";
    $lang="arm";    
}

elseif($LANG=='ENG'){
     $start="Start the test";
     $check_speed="Check your text input speed";   
     $sec="sec";   
     $tray="Try again ։)";
     $per_min="words per minute";
     $accuracy="Accuracy:";
     $try_faster="Try faster!";
     $share="Share";
     $try_again="TRY AGAIN";
     $tooslow = 'It was too slow :(';
     $good = 'You write fast enough!';
     $superspeed = 'Super Speed!';
     $word="word(s)";
     $wordspermin="words per minute:"; 
     $seconds="seconds";
     $lang='en';     
}


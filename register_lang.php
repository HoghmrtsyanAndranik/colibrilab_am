<?php

$LANG=file_get_contents('session.php');




if($LANG=='ARM'){
    $registerhere='Գրանցվի՛ր այստեղ';
    $fullname="Անուն Ազգանուն";
    $age="Տարիք";
    $email="Էլ հասցե";
    $phone="Հեռախոսահամար";
    $course="Դասընթաց";
    $comewithfriend="Արի՛ ընկերոջդ հետ և ստացիր զեղչ"; 
    $numberofstudents="Ուսանողների քանակ";
    $onestudent="1 ուսանող";
    $twostudents="2 ուսանող 10% զեղչ";
    $threestudents="3 ուսանող 15% զեղչ";
    $fourstudents="4 ուսանող 20% զեղչ";
    // $morningtimes="Առավոտյան ժամեր";
    // $daytimes="Ցերեկային ժամեր";
    // $eveningtimes="Երեկոյան ժամեր";
    $message="Հաղորդագրություն";
    $trainingcenter="ուսումնական կենտրոն";
    $yerevan=" ք. Երևան,";
    $address=" Տիգրան Մեծ 49,3-րդ հարկ";
    $addr="Հասցե";
    $email="Էլ․ փոստ";
    $phone="Հեռախոս";
    $confirm="Հաստատել";
    $namerequired="Անուն,ազգանունը լրացնելը պարտադիր է։";
    $agerequired="Տարիքը լրացնելը պարտադիր է։";
    $emailrequired="Էլ․հասցեն լրացնելը պարտադիր է։";
    $phonerequired="Հեռախոսահամարը լրացված չէ։";
    $coursenotselected="Դասընթացն ընտրված չէ";
    $studnumbernotselected="Ուսանողների քանակն ընտրված չէ";
    $prefhours="Նախնտրելի ժամերն ընտրված չեն";

    $thankyou="Շնորհակալություն !";
    $success='Դուք հաջողությամբ գրանցվել եք';
    $contactyou='Մեր աշխատակիցը հնարավորինս շուտ կապ կհաստատի Ձեզ հետ';
    $member='Մասնակից՝';
    $aboutcourse='Դասընթացի մասին`';
    $courseduration='Դասընթացի տևողությունը՝';
    $months='ամիս';
    $perweek='դաս շաբաթական';
    $hoursdur='ժամ տևողությամբ';
    $monthpay='Մեկ ամսվա գումարը՝';
    $dram='դրամ';
    $members_count='Մասնակիցների քանակը՝';
    $notreplay="Խնդրում ենք չպատասխանել այս նամակին։ Մենք կկապվենք Ձեզ հետ:";
    $ifquestions="Եթե ունեք հարցեր խնդրում ենք կապ հաստատել մեզ հետ մեր <a href='http://colibrilab.am/' style='color: #4F8BFF'>վեբ կայքի</a> միջոցով կամ զանգահարել հետևյալ
                  հեռախոսահամարներով՝ +374 91 23-43-67, +374 77 51-46-31 ։"; 
    $prefered_hours="Նախընտրած ժամերը";  
    $comment_text="Հաղորդագրություն";            
}
elseif($LANG=='ENG'){
    $registerhere="Register here!";
    $fullname="Name Surname";
    $age="Age";
    $email="Email";
    $phone="Phone Number";
    $course="Course";
    $comewithfriend="Come with your friend and get a discount";
    $numberofstudents="Number of students";
    $onestudent="1 student";
    $twostudents="2 students 10% discount";
    $threestudents="3 students 15% discount";
    $fourstudents="4 students 20% discount";
    // $morningtimes="Morning hours";
    // $daytimes="Daytime hours";
    // $eveningtimes="Evening hours";
    $message="Message";
    $trainingcenter="training center";
    $yerevan="Yerevan,Armenia";
    $address="49 Tigran Mets Ave.,3rd floor";
    $addr="Address";
    $email="Email";
    $phone="Phone";
    $confirm="Confirm";
    $namerequired="The field name surname is required";
    $agerequired="The field age is required";
    $emailrequired="The field email is required";
    $phonerequired="The field phone is required";
    $coursenotselected="Course not selected";
    $studnumbernotselected="Number of students not selected";
    $prefhours="Preferred hours are not selected";


    $thankyou="Thank You !";
    $success='You have registered successfully';
    $contactyou='We will contact you as soon as possible';
    $member='Member';
    $aboutcourse='About a course';
    $courseduration='Course duration';
    $months='Months';
    $perweek='lessons per week';
    $hoursdur='hours duration';
    $monthpay='payment for a month';
    $dram='dram';
    $members_count='Members count';
    $notreplay="Please,do not reply to this email.We will contact you.";
    $ifquestions=" If you have any questions,please contact us through our <a href='http://colibrilab.am/' style='color: #4F8BFF'>website</a> or call the following phone nombers:+374 91 23-43-67, +374 77 51-46-31"; 
    $prefered_hours="Prefered hours";  
    $comment_text="Comment";      
}


<?php
 include('./config/dbconfig.php');
 $ref="user/";
 $date=(string)date("d-m-Y");
 $date2=date("d-m-Y",strtotime("-1 days"));
 $date2=date("d-m-Y",strtotime("-2 days"));
 //echo $date;
 $today=$database->getReference($ref)->getSnapshot()->numChildren();
 //$yesterday=$database->getReference($ref)->orderByChild('date')->equalTo($date2)->getSnapShot()->numChildren();
 //$dyesterday=$database->getReference($ref)->orderByChild('date')->equalTo($date3)->getSnapShot()->numChildren();
 // echo json_encode($today);
 echo $today;
?>
<?php
 include('./config/dbconfig.php');
 $ref='users/';
 $users=$database->getReference($ref)->getValue();
 foreach($users as $key=>$row)
 {
   $response[$key]["phone"]=$key;
   $response[$key]["data"]=$row;
  // $response[$key]["reward"]=$row["reward"];
  // $data[]=$response[$key];
 //  $response[$key]["reward"]= $row["reward"]; 
   $data[]=$response[$key];
 }
 echo json_encode($data);
 
?>
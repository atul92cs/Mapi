<?php
include('./config/dbconfig.php');
if(isset($_POST['add_user']))
  {
      $name=$_POST['name'];
      $mobile=$_POST['mobile'];
      $location=$_POST['location'];
      $reward=$_POST['reward'];
      $status=$_POST['status'];
      $answer1=$_POST['answer1'];
      $answer2=$_POST['answer2'];
      $answer3=$_POST['answer3'];
      $answer4=$_POST['answer4'];
      $answer5=$_POST['answer5'];
      $answer6=$_POST['answer6'];
      $answer7=$_POST['answer7'];
      $seconds=$_POST['seconds'];

      $data=[
          'name'=>$name,
          'mobile'=>$mobile,
          'reward'=>$reward,
          'location'=>$location,
          'status'=>$status,
          'seconds'=>$seconds,
          'answer1'=>$answer1,
          'answer2'=>$answer2,
          'answer3'=>$answer3,
          'answer4'=>$answer4,
          'answer5'=>$answer5,
          'answer6'=>$answer6,
          'answer7'=>$answer7,
          'date'=>date("d-m-Y")
      ];
      $ref="user/";
      $newquestion=$database->getReference($ref)->push($data);

       if($newquestion)
       {
           $_SESSION['status']='User added';
            header("Location:users.php");
       }
       else
       {
            $_SESSION['status']='Error added';
            header("Location:users.php");
  
       }
  }
  ?>
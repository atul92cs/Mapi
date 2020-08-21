<?php
include('./config/dbconfig.php');
if(isset($_POST['add_data']))
  {
      $question=$_POST['question'];
      $option1=$_POST['option1'];
      $option2=$_POST['option2'];
      $option3=$_POST['option3'];
      $option4=$_POST['option4'];
      $option5=$_POST['option5'];
      $option6=$_POST['option6'];
      $option7=$_POST['option7'];

      $data=[
          'op1'=>$option1,
          'op2'=>$option2,
          'op3'=>$option3,
          'op4'=>$option4,
          'op5'=>$option5,
          'op6'=>$option6,
          'op7'=>$option7,
          'question'=>$question
      ];
      $ref="questions/";
      $newquestion=$database->getReference($ref)->push($data);

       if($newquestion)
       {
           $_SESSION['status']='Question added';
            header("Location:questions.php");
       }
       else
       {
            $_SESSION['status']='Question added';
            header("Location:questions.php");
  
       }
  }
  ?>
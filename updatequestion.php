<?php
if(isset($_POST['update_question']))
  {
    $token=$_POST['token'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $option5=$_POST['option5'];
    $option6=$_POST['option6'];
    $option7=$_POST['option7'];

    $data=[
      'question'=>$question,
      'op1'=>$option1,
      'op2'=>$option2,
      'op3'=>$option3,
      'op4'=>$option4,
      'op5'=>$option5,
      'op6'=>$option6,
      'op7'=>$option7
    ];
    $ref='question/'.$token;
    $updateData=$database->getReference($ref)->update($data);
    if($updateData)
    {
      echo json_encode('Question details updated');
    }
    else
    {
      echo json_encode('Error occured');
    }
  }
  ?>
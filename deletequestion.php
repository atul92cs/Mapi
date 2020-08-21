<?php
  include('./config/dbconfig.php');
  if(isset($_POST['delete_question']))
  {
    $token=$_POST['token'];
    $ref='questions/'.$token;
    $deleteQuestion=$database->getReference($ref)->remove();
    if($deleteQuestion)
    {
      header("Location:questions.php");
    }
    else
    {
      header("Location:questions.php");
    }
  }
 
?>
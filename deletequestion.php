<?php
  include('./config/dbconfig.php');
  if(isset($_POST['delete_question']))
  {
    $token=$_POST['token'];
    $ref='questions/'.$token;
    $deleteQuestion=$database->getReference($ref)->remove();
    if($deleteQuestion)
    {
      echo json_encode('Question deleted');
    }
    else
    {
      echo json_encode('Error occured');
    }
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapi</title>
    <link rel="stylesheet" href="./css/editquestion.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <?php
     $token=$_GET['token'];
     include('./config/dbconfig.php');
     $ref='questions/';
     $getData=$database->getReference($ref)->getChild($token)->getValue();

    ?>
    <div class="form-section">
        <form action="updatequestion.php" method="post">
        <div class="form-group">
            <input type="hidden" name="token" value="<?php echo $token?>" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="question" value="<?php echo $getData['question']?>" id="question" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option1" value="<?php echo $getData['op1']?>" id="option1" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option2" value="<?php echo $getData['op2']?>" id="option2" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option3" value="<?php echo $getData['op3']?>" id="option3" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option4" value="<?php echo $getData['op4']?>" id="option4" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option5" value="<?php echo $getData['op5']?>" id="option5" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option6" value="<?php echo $getData['op6']?>" id="option6" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="option7" value="<?php echo $getData['op7']?>" id="option7" class="form-control">
        </div>
        <div class="form-gorup text-center">
            <button class="btn btn-primary" name="update_question">Update</button>
        </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>
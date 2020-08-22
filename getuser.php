<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/user.css">
    <title>Mapi</title>
</head>
<body>
    <?php
     $token=$_GET['token'];
     include('./config/dbconfig.php');
     $ref='user/';
     $user=$database->getReference($ref)->getChild($token)->getValue();
    ?>
    <div class="info-section">
        <div class="text-section">
            <div class="card">
                <div class="card-body">
                    <h4><?php $user['name']?></h4>
                    <ul class="list-group">
                        <li class="list-group-item">Mobile:- <?php echo $user['mobile'] ? $user['mobile'] :"" ?></li>
                        <li class="list-group-item">Reward:- <?php echo $user['reward'] ? $user['reward'] : ""?></li>
                        <li class="list-group-item">Status:- <?php echo $user['status'] ? $user['reward'] : ""?></li>
                        <li class="list-group-item">Time:- <?php echo $user['second'] ? $user['second'] : ""?></li>
                        <li class="list-group-item">Answer 1:- <?php echo $user['answer1'] ? $user['answer1'] : ""?></li>
                        <li class="list-group-item">Answer 2:- <?php echo $user['answer2'] ? $user['answer2'] : ""?></li>
                        <li class="list-group-item">Answer 3:- <?php echo $user['answer3'] ? $user['answer3'] : ""?></li>
                        <li class="list-group-item">Answer 4:- <?php echo $user['answer4'] ? $user['answer4'] : ""?></li>
                        <li class="list-group-item">Answer 5:- <?php echo $user['answer5'] ? $user['answer5'] : ""?></li>
                        <li class="list-group-item">Answer 6:- <?php echo $user['answer6'] ? $user['answer6'] : ""?></li>
                        <li class="list-group-item">Answer 7:- <?php echo $user['answer7'] ? $user['answer7'] : ""?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="map-section">

        </div>
    </div>
</body>
</html>
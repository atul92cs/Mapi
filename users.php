<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/users.css">
    <title>Mapi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mapi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users.php">Users</a>
      </li>
      <li class="nav-item">
          <a href="questions.php" class="nav-link">Questions</a>
      </li>
      <li class="nav-item">
        <button class="btn btn-primary" onclick="signOut()">Logout</button>
      </li>
    </ul>
  </div>
</nav>

  <div class="main-body">
  <table class="table">
        
   <thead class="thead-dark">
        <tr>
            <th scope="col">Sr.no</th>
            <th scope="col">Name</th>
            <th scope="col" colspan="2">Location</th>
            <th scope="col">Mobile</th>
            <th scope="col">Reward</th>
            <th scope="col">Status</th>
            <th scope="col">Answer1</th>
            <th scope="col">Answer2</th>
            <th scope="col">Answer3</th>
            <th scope="col">Answer4</th>
            <th scope="col">Answer5</th>
            <th scope="col">Answer6</th>
            <th scope="col">Answer7</th>
            <th scope="col">Seconds</th>


        </tr>

   </thead>
    <tbody>
  <?php
    include('./config/dbconfig.php');
    $ref='user/';
    $i=0;
    $users=$database->getReference($ref)->getValue();
    if($users>0)
    {
    foreach($users as $key=>$row)
    {
        $i++;
    ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['Name'] ? row['Name']:" "?></td>
            <td><?php echo $row['Location'] ? row['Location']:" " ?></td>
            <td><?php echo $row['Mobile'] ?  $row['Mobile']:" "?></td>
            <td><?php echo $row['Reward'] ?  $row['Reward'] :" "?></td>
            <td><?php echo $row['Status'] ?  $row['Status']:" "?></td>
            <td><?php echo $row['Answer1'] ?  $row['Answer1']:" "?></td>
            <td><?php echo $row['Answer2'] ? $row['Answer2']:" "?></td>
            <td><?php echo $row['Answer3'] ?  $row['Answer3']:" "?></td>
            <td><?php echo $row['Answer4'] ?  $row['Answer4']:" "?></td>
            <td><?php echo $row['Answer5'] ?  $row['Answer5']:" "?></td>
            <td><?php echo $row['Answer6'] ?  $row['Answer6']:" "?></td>
            <td><?php echo $row['Answer7'] ?  $row['Answer7']:" "?></td>
        </tr>
    <?php
    }
        }
        else
        {
    ?>
        <h4>No Data available</h4>
    <?php
        }    
    ?>
    </tbody>
 </table> 
  </div> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
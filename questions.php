<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/questions.css">
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

<div class="form-section">
    <form action="insertquestion.php" method="POST">
        <div class="form-group">
            <input type="text" name="question" id="question" placeholder="Question" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option1" id="option1" placeholder="Option1"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option2" id="option2" placeholder="Option2"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option3" id="option3" placeholder="Option3"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option4" id="option4" placeholder="Option4"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option5" id="option5" placeholder="Option5"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option6" id="option6" placeholder="Option6"  class="form-control" required>
        </div>
        <div class="form-group">
            <input type="text" name="option7" id="option7" placeholder="Option7"  class="form-control" required>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary" name="add_data">Add</button>
        </div>
    </form>

</div>
<div class="table-section">
   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Sr.no</th>
                <th scope="col">Question</th>
                <th scope="col">Option 1</th>
                <th scope="col">Option 2</th>
                <th scope="col">Option 3</th>
                <th scope="col">Option 4</th>
                <th scope="col">Option 5</th>
                <th scope="col">Option 6</th>
                <th scope="col">Option 7</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include('config/dbconfig.php');
            $ref='questions/';
            $questions=$database->getReference($ref)->getValue();
            if($questions>0)
            {
            $i=0;
            foreach($questions as $key=>$row)
            {
                $i++;
                ?>
                
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row["question"]?></td>
                    <td><?php echo $row["op1"]?></td>
                    <td><?php echo $row["op2"]?></td>
                    <td><?php echo $row["op3"]?></td>
                    <td><?php echo $row["op4"]?></td>
                    <td><?php echo $row["op5"]?></td>
                    <td><?php echo $row["op6"]?></td>
                    <td><?php echo $row["op7"]?></td>
                    <td>
                        <form action="deletequestion.php" method="post">
                            <input type="hidden" name="token" value="<?php echo $key; ?>">
                            <button class="btn btn-danger" name="delete_question">Delete</button>
                        </form>
                    </td>
                    <td><a href="editquestions.php?token=<?php echo $key?>"><button class="btn btn-primary">Edit</button></a></td>
                </tr>
            <?php
            }
        } 
            else
            {
                ?>
                <h4>No questions found</h4>
                <?php
            }
            ?>
        </tbody>
   </table>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/questionFunctions.js"></script>
    <script src="./js/userFunctions.js"></script>
</div>
</body>
</html>
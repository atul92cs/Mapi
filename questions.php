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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item">
          <a href="" class="nav-link">Questions</a>
      </li>
    </ul>
  </div>
</nav>
<div class="form-section">
    <form action="" method="POST">
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
            <button class="btn btn-primary">Add</button>
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
                    <td><button class="btn btn-danger">Delete</button></td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
   </table>
   
</div>
</body>
</html>
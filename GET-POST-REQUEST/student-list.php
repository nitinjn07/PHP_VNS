<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
      <div class="row">
        <div class="col-md-8 mx-auto">
            <a href="form.php" class="btn btn-danger">New Registration</a>
              <h2>Student List</h2>
              <table class="table table-striped">
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Hobby</th>
                    <th>Gender</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
                <?php
                  //connectio 
                  include('config.php');

                  //Query 
                  $qry ="select * from student where delstatus=1 ORDER BY id desc";

                  //Execution
                  echo "<pre>";
                  $rs = mysqli_query($con,$qry);
                  $i=1;
                  while($data = mysqli_fetch_array($rs))
                  {
                 ?>
                  
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['hobby']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['city']; ?></td>
                    <td><a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger" onClick="return confirm('Are you sure to delete?');">Delete</a></td>
                </tr>

                 <?php
                   $i++; 
                  } 

                  
                ?>
                
              </table>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
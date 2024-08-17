
    <?php 
      $name = $_POST['sname'];
      $email = $_POST['semail'];
      $gender = $_POST['g'];
      $hobby = implode(",",$_POST['hobby']);
      $city = $_POST['city']; 

      // Connection 
         include('config.php');
      // Query 
        $qry="insert into student(name,email,gender,hobby,city)
        values('$name','$email','$gender','$hobby','$city')";
      // Execution 

        $rs = mysqli_query($con,$qry);
        
        if($rs>0)
        {
            $msg = "Thank you for registing with us.";
        }
    ?> 
     
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
            <div class="col-md-5 mx-auto text-center">
                  <img src="icon.png" width="150px"/>
                  <p>
                    <?=$msg;?>
                  </p>
                  <a href="form.php">Go Back</a>
            </div>
      </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>
 

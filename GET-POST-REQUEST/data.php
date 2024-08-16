
    <?php 
      $name = $_POST['sname'];
      $email = $_POST['semail'];
      $gender = $_POST['g'];
      $hobby = implode(",",$_POST['hobby']);
      $city = $_POST['city']; 

      // Connection 
         $con = mysqli_connect('localhost','root','','vns_college');   // server,username,password,dbname
      // Query 
        $qry="insert into student(name,email,gender,hobby,city)
        values('$name','$email','$gender','$hobby','$city')";
      // Execution 

        $rs = mysqli_query($con,$qry);
        
        if($rs>0)
        {
            echo "Student Registration Successful";
        }
    ?> 
     
     <a href="form.php">New Registration</a>
 

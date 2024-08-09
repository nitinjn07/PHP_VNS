<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
   if(isset($_POST['login']))
   {
      $u = "Ram";
      $p = 1234;

      $username = $_POST['uname'];
      $password = $_POST['pwd'];


      if($username == $u && $password==$p)
      {
         session_start();
         $_SESSION['user'] = $username;
         echo "<script> window.location.href='dashboard.php'; </script>";
      }
      else 
      {
        echo "Wrong username & Password";
      }
   }
?>
<form action="" method="post">
   <input type="text" name="uname" />
   <input type="password" name="pwd" />
   <input type="submit" name="login" value="Login" />
</form>
    
</body>
</html>
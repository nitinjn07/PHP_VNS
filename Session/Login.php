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

      if(isset($_POST['rem']))
      {
          setcookie('username',$username,time()+3600,'/');
          setcookie('password',$password,time()+3600,'/');
      }
      else 
      {
         setcookie('username','',time()-3600,'/');
          setcookie('password','',time()-3600,'/');
      }


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
   <input type="text" name="uname" placeholder="Enter username"   value="<?=@$_COOKIE['username']; ?>"  /><br/><br/>
   <input type="password" name="pwd" placeholder="Enter password"     value="<?=@$_COOKIE['password']; ?>"/><br/>
   <input type="checkbox" name="rem"/> Remember Password ?<br/>
   <input type="submit" name="login" value="Login" />
</form>
    
</body>
</html>
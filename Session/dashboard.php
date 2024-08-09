<?php 
session_start(); 
if(!isset($_SESSION['user']))
{
   echo "<script> window.location.href='logout.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    

    <h1>WELCOME TO : <?= $_SESSION['user'];  ?></h1>

    <a href="logout.php">Logout</a>
    
</body>
</html>
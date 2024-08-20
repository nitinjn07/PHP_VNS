<?php 
  
  $id = $_GET['id'];

  include('connection.php');

  //$qry="delete from computers where id='$id'";
  
  $qry="update computers set delstatus=0 where id='$id'";

  $ex = mysqli_query($con,$qry);

  if($ex>0)
  {
    echo "<script>window.location.href='ListofComputer.php';</script>";
  }
?>
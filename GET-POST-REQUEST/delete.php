<?php 
 $id =  $_GET['id'];

 //connection 
 include('config.php');

 //Query 
 $qry="update student set delstatus=0 where id='$id'";



 //execution 

 $rs = mysqli_query($con,$qry);

 if($rs>0)
 {
    echo "<script> window.location.href='student-list.php'; </script>"; 
 }
?>
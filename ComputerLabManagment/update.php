<?php 
   
 extract($_POST);



 include('connection.php');
 $software = implode(",",$software);
 //Querry 
 $qry="update computers set computer_name='$computer_name',
                            address='$address',
                            processor='$processor',
                            hdd='$hdd',
                            ssd='$ssd',
                            ram='$ram',
                            keyboard='$keyboard',
                            extra='$extra',
                            collegename='$collegename',
                            location='$location',
                            software='$software',
                            problem='$problem' where id='$id'";


                                   

 // Execute 
   
   $ex = mysqli_query($con,$qry);

   if($ex>0)
   {
    echo "<script>window.location.href='ListofComputer.php';</script>";
   }
?>
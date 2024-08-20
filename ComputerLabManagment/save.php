<?php 
   
 extract($_POST);

 include('connection.php');
 $software = implode(",",$software);
 //Querry 
   $qry="insert into computers(computer_name,
                               address,
                               processor,
                               hdd,
                               ssd,
                               ram,
                               keyboard,
                               extra,
                               collegename,
                               location,
                               software,
                               problem) 
                               values('$computer_name',
                                      '$address',
                                      '$processor',
                                      '$hdd',
                                      '$ssd',
                                      '$ram',
                                      '$keyboard',
                                      '$extra',
                                      '$collegename',
                                      '$location',
                                      '$software',
                                      '$problem')";


                                   

 // Execute 
   
   $ex = mysqli_query($con,$qry);

   if($ex>0)
   {
    echo "Computer Information Saved Successfully";
   }
?>


<a href="AddComputer.php">Go Back</a>
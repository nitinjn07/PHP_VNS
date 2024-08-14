<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
  if(isset($_POST['upload']))
  {

     $fname=  $_FILES['photo']['name'];
     $ftype= $_FILES['photo']['type'];
     $fsize= $_FILES['photo']['size'];
     $ftmp= $_FILES['photo']['tmp_name'];
     
     if($ftype=='image/jpg' || $ftype=='image/png' || $ftype=='image/jpeg')
     {  
        if($fsize<=1024000)
        {
                $temp = explode(".",$fname);
                        $newfilename = round(time()). '.' . end($temp);

                        $path ='files/';
                        $fullpath = $path.$newfilename; 


                        $rs = move_uploaded_file($ftmp,$fullpath);

                        if($rs)
                        {
                        echo "File Uploaded Successfully";
                        }
        }
        else 
        {
              echo "File size should be lessthan 1 MB current size is in byte".$fsize;
        }

        
     }
     else 
     {
        echo "File formate should be JPG , PNG";
     }
  
    

        


  }

?>

<form action="" method="post" enctype="multipart/form-data">
<table border="1">
    <tr>
        <td>Photo</td>
        <td><input type="file" name="photo"/></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="upload" value="Upload Now"/></td>
    </tr>
</table>
</form>
    
</body>
</html>
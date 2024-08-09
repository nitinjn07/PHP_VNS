

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<?php 
  
  $dict = array('Good'=>"Something Good","Bad"=>"Something Not good");

  
  if(isset($_POST['check']))
  {
     $msg = $_POST['msg'];  // Good

     $i=0;
     foreach($dict as $k=>$v)
     {
        if($msg==$k)
        {
            echo $v;
            $i++;
        }
        
     }

    if($i==0)
    {
        echo "No Meaning Found";
    }

  }
  else 
  {
    echo "Please enter any word";
  }
?>
<form action="" method="post">
    <input type="text" name="msg" required/>
    <input type="submit" name="check" value="Check Meaning"/>
</form>
    
</body>
</html>
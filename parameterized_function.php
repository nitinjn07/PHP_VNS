

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 

          if(isset($_POST['cal']))
          {
               $a = $_POST['no1'];
               $b = $_POST['no2'];

               function sum($a,$b)
               {    
               $c = $a + $b;
               echo "Sum of ".$a." and ".$b." =".$c;
               }   
       
               sum($a,$b);

          }
        
        

        ?>

    <form action="" method="post">
        <input type="text" name="no1" />
        <input type="text" name="no2" />
        <input type="submit" value="Sum" name="cal" />
    </form>
</body>
</html>


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
               include('lib.php');

               $a = $_POST['no1'];
               $b = $_POST['no2'];

               $ans = div($a,$b);   
               echo $ans;
              

          }
        
        

        ?>

    <form action="" method="post">
        <input type="text" name="no1" />
        <input type="text" name="no2" />
        <input type="submit" value="Sum" name="cal" />
    </form>
</body>
</html>
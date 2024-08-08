<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
           if(isset($_POST['check']))
           {
               $amount = $_POST['amount'];

               if($amount>50 && $amount<=500)
               {
                   echo "You got 5% Discount";
               }
               else if($amount>500 && $amount<=1000)
               {
                  echo "You are eligible for 10% OFF";
               } 
               else if($amount>1000)
               {
                  echo "You are eligible for 20% OFF";
               } 
               else 
               {
                  echo "Sorry no offers available";
               }

           }

          
           
    ?>
    <form action="" method="post">
          <input  type="text" name="amount"/>
          <input type="submit" value="Check Discount" name="check"/>
    </form>
    
</body>
</html>
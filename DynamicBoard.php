<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         td 
         {
            color:white;
            font-size:50px;
            text-align:center;
         }
        </style>
</head>
<body>

    <?php 
       $row = 4; 
       $col = 4;
       $t=0;
    ?>

     <table width="800px" height="800px" border="1" align="center">
          <?php 
            for($i=1; $i<=$row; $i++)
            {
          ?>
            <tr>
               <?php 
                 for($j=$t+1; $j<=$col+$t; $j++)
                 {
               ?>
                <td <?php 
                
                   if($j%2==0)
                   {
                     echo "bgcolor='red'";
                   }
                   else 
                   {
                     echo "bgcolor='black'";
                   }
                 
                ?>><?php echo $j; ?> </td>
              <?php
                
                 }
               ?>

            </tr>    
        <?php 
             $t = $j-1;
            }
          ?>
          
     </table>
    
</body>
</html>
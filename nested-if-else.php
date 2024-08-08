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
                $dbpass = 11111;
                $current = $_POST['current'];
                $newpass= $_POST['newpass'];
                $conpass = $_POST['conpass'];

                if($current==$dbpass)
                {
                     if($newpass!=$current && $conpass!=$current)
                     {
                          if($newpass==$conpass)
                          {
                              $dbpass = $newpass;

                              echo "Your Password has been changed - ".$dbpass;
                          }
                          else 
                          {
                            echo "New and Confirm should be same";
                          }
                     }
                     else 
                     {
                        echo "New and Confirm should be diffrent from current password";
                     }
                }
                else 
                {
                    echo "You current password is wrong";
                }


           }

          
           
    ?>
    <form action="" method="post">
          <input  type="text" name="current" placeholder="Current Password"/><br/>
          <input  type="text" name="newpass" placeholder="New Password"/><br/>
          <input  type="text" name="conpass" placeholder="Confirm Password"/><br/>
          <input type="submit" value="Change Password" name="check"/>
    </form>
    
</body>
</html>
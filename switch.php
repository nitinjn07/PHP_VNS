<?php 
if(isset($_POST['change_theme']))
{
    $theme = $_POST['theme'];
   
    switch($theme)
    {
        case 'nature':
        $bg="green";
        $text="white";
        break;

        case 'desert':
        $bg="brown";
        $text="white";
        break;

        case 'rainy':
        $bg="skyblue";
        $text="blue";
        break;

        default:
        $bg="black";
        $text="white";
        break;

    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
        {
            background: <?php echo $bg; ?>;
            color:<?php echo $text; ?>;
        }
        </style>
</head>
<body>

    
    
    <form action="" method="post">
          <select name="theme">
               <option>Select Theme</option>
               <option value="nature">Nature</option>
               <option value="desert">Desert</option>
               <option value="rainy">Rainy</option>
            </select>
            <input type="submit" name="change_theme" value="Change Now" />
    </form>


    <h2>Heading Here</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa consectetur culpa similique saepe quae, deleniti corrupti necessitatibus in fuga assumenda atque commodi reiciendis nobis quo ex, officiis vel beatae nisi.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eius error quibusdam neque, molestias pariatur, eum quae at quaerat sunt doloremque numquam itaque tempore magni provident, dolores modi delectus facere.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta exercitationem, asperiores consequuntur, quaerat esse ipsum aperiam corrupti veniam velit officiis delectus officia dolor incidunt non nostrum repellendus vero possimus illum!
    </p>
    
</body>
</html>
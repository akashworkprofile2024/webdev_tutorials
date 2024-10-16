<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard Page</title>
</head>
<body>
     <center>
        <?php
            $user=$_POST['username'];
            $pass=$_POST['pass'];
            
            $cookiesuername='user';
            $cookieusername_value=$user;
            
            $cookiepass='pass';
            $cookiepass_value=$pass;
            
            setcookie($cookiesuername,$cookieusername_value);
            setcookie($cookiepass, $cookiepass_value);

            echo "Username: $user".'<br>';
            echo "Password: $pass";

        ?>
     </center>
</body>
</html>


  <!-- Cookie is a Browser Memory once data is stored it will available 
   for next pages of the website  
   -->
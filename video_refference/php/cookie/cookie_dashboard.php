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
            
            echo "Username: $user".'<br>';
            echo "Password: $pass";

            // Create Cookie 

            $username_cookie='user';
            $username_cookie_value=$user; 

            $password_cookie='pass';
            $password_cookie_value=$pass;

            //  Set Username Cookie
            setcookie($username_cookie,$username_cookie_value);
            // Set Password Cookie
            setcookie($password_cookie,$password_cookie_value);
        ?>

        <form action="redirect_cookie.php" method="post">
             <input type="submit" value="Submit">
        </form>
     </center>
</body>
</html>


  <!-- Cookie is a Browser Memory once data is stored it will available 
   for next pages of the website  
   --> 
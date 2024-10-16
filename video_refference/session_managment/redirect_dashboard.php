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
           session_start();
           $username=$_SESSION['username'];
           $password=$_SESSION['password'];
            
           
            echo'<h3>Dashboard 2</h3>'.'<br>';
            echo "<h3>Username: $username</h3>";
            echo "<h3>Password: $password</h3>";
            echo"<button type='btn' style='text-decoration:none'><a href='redirect_dashobard1.php'>Redirect Page 2</a></button>";

            // Destroy Sessions
            session_unset();
            session_destroy();
        ?>

      
     </center>
</body>
</html>


  <!-- Cookie is a Browser Memory once data is stored it will available 
   for next pages of the website  
   -->


  
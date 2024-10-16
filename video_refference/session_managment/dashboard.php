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
        


           echo'<h3>Dashboard 1</h3>'.'<br>';
            echo "<h3>Username: $username</h3>";
            echo "<h3>Password: $password</h3>";
        ?>
          <button class="btn"><a style="text-decoration: none;" href="redirect_dashboard.php">Redirect Page</a></button>
     </center>
</body>
</html>


  <!-- Cookie is a Browser Memory once data is stored it will available 
   for next pages of the website  
   -->

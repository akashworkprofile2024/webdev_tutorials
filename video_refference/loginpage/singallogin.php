<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>   
    <form action="singallogin.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter Username" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id=password placeholder='****...' require><br><br>
        <input type="submit" name="submitbtn" id="submit" value="Submit">
    </form>
    </center>

    <?php
    if(isset($_POST['submitbtn']))
    {
      $user=$_POST['username'];
      $pass=$_POST['password'];
      
      if($user=="Akash" && $pass=="akash123")
      {
        header('Location: dashboard.html');
        
      }else{
        echo "<center><h3 style='color:red'> User Not Found</h3></center>";
        
      }
    } 

    ?>
    
</body>
</html>
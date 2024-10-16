<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
<body>

<?php
   include 'db.php';  

    //    Create Query
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
     
      if(isset($_POST['submit']))
      {
         $sql="INSERT INTO student VALUES(?,?,?,?,?)";
         $ps=$con->prepare($sql);
         $ps->bind_param("issss",$id,$name,$lname,$username,$password);
         $ps->execute();
         echo "<br>";
         echo "User detail Entered";
      }
    ?>
    

<div class='container-sm d-flex justify-content-center mt-2 p-5'>
         <form action="insertdata_byuser.php" method='post'>
            <label for="name">Name</label><br>
            <input type="text"  id='name' name='name' require><br><br>
             
            <label  for="lname">Lname</label><br>
            <input type="text" id='lname' name='lname' require><br><br>

            <label for="username">Username</label><br>
            <input type="text" id='username' name='username' require><br><br>

            <label for="password">Password</label><br>
            <input type="password" id='password' name='password' require><br><br>

            <input type='submit' id='submit' name='submit' value='Submit'>
         </form>
</div>
    
</body>
</html>
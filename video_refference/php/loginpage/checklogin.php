<?php
    $usernamefetch=$_POST['username'];
    $passwordfetch=$_POST['pass'];
    
    $username='Akash';
    $pass='akash123';

    
      if($usernamefetch == $username && $passwordfetch == $pass)
      {
         header('Location:dashboard.php');
      }else{
        echo "<center><h3 style='color:red'>User Not Found<h3></center>";
      }
    ?>


<?php
  session_start();
    $usernamefetch=$_POST['username'];
    $passwordfetch=$_POST['pass'];
    
    $username='Akash';
    $pass='akash123';


    // Create Session
    $_SESSION['username']=$usernamefetch;
    $_SESSION['password']=$passwordfetch;

     

    
      if($usernamefetch == $username && $passwordfetch == $pass)
      {
         header('Location:dashboard.php');
      }else{
        echo "<center><h3 style='color:red'>User Not Found<h3></center>";
      }
    ?>


    <!-- 
      Sessions  - Maintain data state on Server
      Cookie - Maintain data state on Client Browser Machine
    -->

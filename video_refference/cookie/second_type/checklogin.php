<?php
    
    $username='Akash';
    $pass='akash123';
     
    $usernamefetch=$_POST['username'];
    $passwordfetch=$_POST['pass'];

    // Create Cookie
    $cookieusername='usernamefetch';
    $cookieusername_value=$usernamefetch;

    $cookiepass='passwordfetch';
    $cookiepass_value=$passwordfetch;


    // Set Cookie 
    setcookie($cookieusername,$cookieusername_value);
    setcookie($cookiepass,$cookiepass_value);

    
    
      if($usernamefetch == $username && $passwordfetch == $pass)
      {
         header('Location: demodashboard.php');
      }else{
        echo "<center><h3 style='color:red'>User Not Found<h3></center>";
      }
    ?>


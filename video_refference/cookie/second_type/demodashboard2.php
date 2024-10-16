<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user=$_COOKIE['usernamefetch'];
        $pass=$_COOKIE['passwordfetch'];
    ?>
   <center>
      <div>
         <h3 style="color: red;">We are in demodashboard2</h3>
         <h3>Name: <?php echo htmlspecialchars($user)?></h3>
         <h3>Password: <?php echo htmlspecialchars($pass)?> </h3>
      </div>
      <form action="demodashboard2.php"></form>
   </center>
</body>
</html>
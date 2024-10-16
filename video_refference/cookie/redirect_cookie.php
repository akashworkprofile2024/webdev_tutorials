<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user=$_COOKIE['user'];
        $pass=$_COOKIE['pass'];
    ?>
   <center>
      <div>
         <h3>Name: <?php echo htmlspecialchars($user)?></h3>
         <h3>Password: <?php echo htmlspecialchars($pass)?> </h3>
      </div>
   </center>
</body>
</html>
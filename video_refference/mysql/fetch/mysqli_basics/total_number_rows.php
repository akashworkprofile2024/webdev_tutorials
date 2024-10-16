<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch Data</title>
</head>
<body>
    <?php
      $con=mysqli_connect('localhost','root','','demo');
      // echo 'Connected';
      $sql='SELECT * FROM student';
      
      $store=$con->query($sql); 
      $n=mysqli_num_rows($store); // Count the Rows
      echo '<center>Total Number Of Data: '.$n.'<center>';
      
      
    ?>
</body>
</html>

<!-- 
fetch_row();
fetch_assoc();
fetch_all();
-->
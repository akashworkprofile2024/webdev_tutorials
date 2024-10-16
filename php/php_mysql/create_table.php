<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $con=mysqli_connect('localhost','root','','demo');
      if($con->connect_error)
      {
        die("Connection Failed: " . $con->connect_error);
      }

      $sql = "CREATE TABLE testable(id int AUTO_INCREMENT PRIMARY KEY, name varchar(50), age int(2) ,lname varchar(50))";

      if($con->query($sql) === TRUE)
      {
        echo "Table testable create successfully";
      }else{
        echo "Error creating table" . $con->error;
      }

      $con->close();
    ?>
</body>
</html>
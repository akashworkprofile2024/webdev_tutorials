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

      $sql="INSERT INTO testable(name,age,lname)VALUES('Rakesh',50,'Kumar');";
      $sql .="INSERT INTO testable(name,age,lname)VALUES('Priyank',35,'Raut');";
      $sql .="INSERT INTO testable(name,age,lname)VALUES('Priya',60,'Rai');";
       
      if($con->multi_query($sql) === TRUE)
      {
        echo "New Records Created" ;
      }else{
        echo "Error: " . $sql . "<br>" . $con->error ;
      }

     $con->close();
    ?>
</body>
</html>
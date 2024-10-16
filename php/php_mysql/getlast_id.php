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
       if($con->connect_error){
          die("Connection Failed" . $con->connect_error);
       }

       $sql="INSERT INTO testable(name,age,lname)VALUES('Rahul',10,'Singh')";

       if($con->query($sql) === TRUE)
       {
          $last_id = $con->insert_id;
          echo "New Recorded Created. Last inserted ID is: " . $last_id;
       }else{
        echo "Error: " . $sql . "<br>" . $con->error;
       }
    ?>
</body>
</html>
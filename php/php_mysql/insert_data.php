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
          die("Connection Failed" . $con->connect_error);
       }

       $sql="INSERT INTO testable(name,age,lname) VALUES('Akash',45,'Biswas')";

       if($con->query($sql) === TRUE)
       {
         echo "New record created successfully";
       }else{
        echo "Error: " . $sql . "<br>" . $con->error;
       }

       $con->close();
    ?>
</body>
</html>
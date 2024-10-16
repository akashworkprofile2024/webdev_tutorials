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
           die("Connection Field: ".$con->connect_error);  
        }
        echo "Connected Sucessfully";
    ?>
</body>
</html>
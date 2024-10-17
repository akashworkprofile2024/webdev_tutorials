<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
          $con=mysqli_connect('localhost','root','','demo');
        //    echo 'connected';

           
           session_start();
           $userenter=$_SESSION['$userenter'];
        

           $sql="DELETE FROM student WHERE name=?";
           $ps=$con->prepare($sql);
           $ps->bind_param('s',$userenter);
           $ps->execute();
           echo "Record Deleted";

           

    ?>
    </center>
</body>
</html>
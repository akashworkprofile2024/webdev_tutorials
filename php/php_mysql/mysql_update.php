<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "db.php";

        if(isset($_POST['submit'])){
            $uname=$_POST['uname'];
            $lname=$_POST['lname'];
            $uid=$_POST['uid'];
            
            $sql="UPDATE testable SET name='$uname',lname='$lname' WHERE id='$uid'";

            if(mysqli_query($con,$sql)){
                echo "Record updated Successful";
            }else{
                echo "Error" . mysqli_error($con);               
            }
        }
    ?>
    <form action="mysql_update.php" method="post">
        <label for="uid">UID</label>
        <input type="tel" name="uid" lname='uid'><br>
        <label for="uname">Name</label>
        <input type="text" name="uname" id="uname"><br>
        <label for="lname">Lname</label>
        <input type="text" name="lname" id="lname"><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>
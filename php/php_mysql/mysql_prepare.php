
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
       include 'db.php';

       if(isset($_POST['submit']))
       {
           $uname=$_POST['uname'];
           $age=$_POST['age'];
           $lname=$_POST['lname'];

        //    prepare and bind
           $sql=$con->prepare("INSERT INTO testable(name,age,lname)VALUES(?,?,?)");
           $sql->bind_param('sis',$uname,$age,$lname);

        //    execute
        $sql->execute();

        echo "<script>
             window.alert('New records Created Successfully ');
        </script>";

         $sql->close();
         $con->close(); 
       }
       
?>


    <form action="mysql_prepare.php" method="post">
        <label for="uname">Name</label>
        <input type="text" name="uname" id="uname"><br>
        <label for="age">age</label>
        <input type="tel" name="age" id="age"><br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname"><br>
        <input type="submit" name="submit" id="submit" value="submit" >
    </form>
</body>
</html>
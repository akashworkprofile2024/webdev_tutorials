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

      if(isset($_POST['submit']))
      {
        $uid=$_POST['uid'];

        $sql="DELETE FROM testable WHERE id='$uid'";

        if(mysqli_query($con,$sql)){
            echo "<script>
             window.alert('Record Delete Successful');
            </script>";
        }else{
            echo "Error Deleting record" . mysqli_error($con);
        }
      }
      
    ?>
    <form action="mysql_delete.php" method="post">
        <input type="tel" name="uid" id="uid">
        <input type="submit" name="submit" id="submit" value="Delete">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch Data</title>
</head>
<body>
<form action="fetchdata_byuser.php" method='post'>
      <center>
        Name <input type="text" id='name' name='name'>
        <input type="submit" name='submit' value='Submit'>
      </center>
    </form>

    <?php
      $con=mysqli_connect('localhost','root','','demo');
      // echo 'Connected';

      $sendusername=$_POST['name'];
       
        $sql="SELECT * FROM student WHERE name='$sendusername'";
        $store=$con->query($sql);    
        $num=mysqli_num_rows($store); // Count the Rows
        $row=mysqli_fetch_row($store);
       
        $uid=$row[0];
        echo $uid.' ';
        $firstname=$row[1];
        echo $firstname.' ';
        $lastname=$row[2];
        echo $lastname.' ';
        $username=$row[3];
        echo $username.' ';
        $password=$row[4];
        echo $password.' ';
      
    ?>
    
</body>
</html>
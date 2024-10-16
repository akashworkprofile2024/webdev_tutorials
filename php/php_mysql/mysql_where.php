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
            $search=$_POST['search'];
            
            $sql="SELECT id , name , lname, age FROM testable WHERE name='$search'";
            $runsql=mysqli_query($con,$sql);
            
            if(mysqli_num_rows($runsql)>0)
            {
                
                  while($row=mysqli_fetch_assoc($runsql))
                  {
                     echo "ID: ".$row['id']."<br>";                      
                     echo "NAME: ".$row['name']."<br>";                      
                     echo "LNAME: ".$row['lname']."<br>";                      
                  } 
            }else{
                echo "0 result";
            }
            
        }
    ?>

    <form action="mysql_where.php" method="post">
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
</body>
</html>
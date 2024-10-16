<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table,th,td{
        border: 1px solid black;
    }
</style>

<body>
    <form action="mysql_where_table.php" method="post">
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" id="submit">
    </form> <br>

    <?php
       include "db.php";

       if(isset($_POST['submit'])){
        $search=$_POST['search'];
        
        $sql="SELECT id,name,lname FROM testable WHERE name='$search'";
        $runsql=mysqli_query($con, $sql);

        if(mysqli_num_rows($runsql)){
            
            echo"<table><tr><th>ID</th><th>Name</th><th>Last Name</th></tr>";

            while($row=mysqli_fetch_assoc($runsql)){
               echo"<tr>";
               echo"<td>".$row['id']."</td>";
               echo"<td>".$row['name']."</td>";
               echo"<td>".$row['lname']."</td>";
               echo"</tr>";
            }

            echo"</table>";
        }else{
            echo "0 result";
        }

        

       }
    ?>

    
</body>
</html>
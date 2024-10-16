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
       $sql="SELECT id,name,lname,age FROM testable ORDER BY lname";
       $runsql=mysqli_query($con, $sql);
       
       if(mysqli_num_rows($runsql)>0){
          while($row=mysqli_fetch_assoc($runsql)){
            echo "ID: ".$row['id']." NAME: ".$row['name']." Last Name: ".$row['lname']." AGE: ".$row['age']."<br>";
          }
       }else{
         echo "0 results";
       }
    ?>
</body>
</html>

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

       $sql="SELECT id , name , lname FROM testable";
       $runsql=mysqli_query($con,$sql);

       if(mysqli_num_rows($runsql)>0){
         while($row=mysqli_fetch_assoc($runsql)){
            echo "id: " . $row['id'] . " Name: " . $row['name'] . "Last Name: " . $row['lname']."<br>";
         }
       }else{
        echo " 0 result";
       }
       
?>


    
</body>
</html>
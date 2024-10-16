<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch Data</title>
</head>
<body>
    <?php
      $con=mysqli_connect('localhost','root','','demo');
      // echo 'Connected';
      $database='demo';
      $sql='SELECT * FROM student';
      $store=$con->query($sql); 
      $num=mysqli_num_rows($store); // Count the Rows

      $particular_data='SELECT * FROM student WHERE id=1';
      $store1=$con->query($particular_data);

      if($num>0){

           echo "All Data in ".$database.' Database '.'<br><br>';
           while($row=mysqli_fetch_row($store)){
            
              echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4].'<br>';   
           }
          
      }else{
        echo "No Data Found";
      }

      if($num>0){
        echo '<br>'."Particular Data on ".$database.' Database'.'<br><br>';
        while($row=mysqli_fetch_row($store1))
        {
          echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4].'<br>'; 
        }
      }else{
          echo "Record Not found";
      }
     
    $con->close();
    ?>
</body>
</html>

<!-- 
fetch_row();
fetch_assoc();
fetch_all();
-->
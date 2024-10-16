

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
</head>
<body>
        <center> 
        <form action="frontpage.php" method="post">
          Name <input type="text" id="name" name="name">
          <input type="submit" id="submit" name="btnsubmit" value='Search'>
        </form><br><br>  
       

<?php
        if(isset($_POST['btnsubmit'])){
            $userenter=$_POST['name'];
            
            $con=mysqli_connect("localhost","root","","demo");
            $sql="SELECT * FROM student WHERE name='$userenter'";
            $store=$con->query($sql);
            $n=mysqli_num_rows($store);
            if($n>0)
            {
               //    echo "record found";
              session_start(); 
              $_SESSION['$userenter']=$userenter;

              echo "<table border=1>";
              echo"<tr><th>UID</th><th>Name</th><th>Lname</th></tr>"; 
              while($row=mysqli_fetch_assoc($store))
              {
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['name']."</td>";
                echo"<td>".$row['lname']."</td>";
                echo"<form action='deletedata.php' method='post'>";
                 echo "<td><input type='submit' name='delbtn' value='Delete'></td>"   ;
                echo "</form>";
                echo"</tr>"; 
              }


                    
            //  echo "</table>";
            }else{
                echo "<span style='color:red'>no record found<span>";
            }
        }
        
?>
    
    </center>
    
    </table>
      
    

   
   
</body>
</html>
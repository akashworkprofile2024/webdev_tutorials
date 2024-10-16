<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard Page</title>
</head>
<body>
     <center>
        <?php
         session_start();
         
         $username=$_SESSION['username'];  
         $password=$_SESSION['password'];

        ?>
        <?php
        
           
            if( $username == TRUE && $password == TRUE ){
                   echo 'Session Not Destroy';
            }else{
                echo "Session is Destroyed";
            }
            
        ?>
     </center>
</body>
</html>


  <!-- Cookie is a Browser Memory once data is stored it will available 
   for next pages of the website  
   -->


  
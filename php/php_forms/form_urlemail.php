<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error{
        color:red;
    }
</style>
<body>
    <?php
       $nameErr = $emailErr = $webErr = $commentErr = "" ;
       $name = $email = $website = $comment = "" ; 

    
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //    Name
        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        }else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-']*$/",$name)){
                $nameErr = "Only letters and white space are allowed";
            }
        }
    
        // Email   
        if(empty($_POST['email'])){
            $emailErr = "Email is required";
        }else{
            $email=test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }

        //  Website
       if(empty($_POST['website'])){
         $website=" ";
       }else{
         $website=test_input($_POST['website']);
         if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
           $webErr = "Innvalid Url";
         }
       }

    //    Comment
        if(empty($_POST['comment'])){
            $comment = "";
        }else{
            $comment = test_input($_POST['comment']);
        }

       }

       function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
       }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      Name: <br>
      <input type="text" name="name" id="name">
      <span class="error">*<?php echo $nameErr;?></span><br>
      
      Email:  <br>
      <input type="text" name="email" id="email">
      <span class="error">*<?php echo $emailErr;?></span><br>

      Website: <br>
      <input type="text" name="website" id="website">
      <span class="error">*<?php echo $webErr;?></span><br>

      Comment: <br>
      <textarea type="text" name="comment" id="comment"></textarea>
      <span class="error">*<?php echo $commentErr;?></span><br> 

      <input type="submit" name="submit" id="submit" value="submit">

    </form>

    <?php
       echo'<h2>All Input</h2>';
       echo $name;
       echo '<br>';
       echo $email;
       echo '<br>';
       echo $webiste;
       echo '<br>';
       echo $comment;
       echo '<br>';
    ?>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $uname = $email = $web = $comment = $gender = "";

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $uname=test_input($_POST['uname']);
        $email=test_input($_POST['email']);
        $website=test_input($_POST['web']);
        $comment=test_input($_POST['comment']);
        $gender=test_input($_POST['gender']);
        
      }

      function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
     <h2>Php For Validation</h2>
     <form action="form_validation.php" method="post">
        Name: <input type="text" name="uname" id="uname"><br>
        Email: <input type="email" name="email" id="email"><br>
        Website: <input type="text" name="web" id="web"><br>
        Comment: <textarea name="comment" id="comment" rows="5" cols="40"></textarea><br><br>

        Gender:
        <input type="radio" name="gender" id="gender" value="Male">Male
        <input type="radio" name="gender" id="gender" value="Female">Female
        <input type="radio" name="gender" id="gender" value="Others">Others
        <input type="submit" name="submit" id="submit" value="submit">
     </form>

      <?php
        echo"<h2>Your Input</h2>";
        echo $uname;
        echo "<br>";
        echo $email;
        echo"<br>";
        echo $website;
        echo"<br>";
        echo $comment;
        echo "<br>";
        echo $gender; 
        echo"";
      ?>
</body>
</html>
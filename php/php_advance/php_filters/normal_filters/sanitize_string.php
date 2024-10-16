<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="sanitize_string.php" method="post">
        <label for="string">string</label><br>
        <input type="text" name="string" id="string"><br><br>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        $store_str=$_POST['string'];
        $san_string = filter_var($store_str,FILTER_SANITIZE_STRING);
        echo $san_string.'<br><br>'; 
      }
    ?>
</body>
</html>
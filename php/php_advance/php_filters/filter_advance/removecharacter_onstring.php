<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="removecharacter_onstring.php" method="post">
        <label for="">String</label>&nbsp;&nbsp;
        <input type="text" name="str" id="str">&nbsp;&nbsp;
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
       if(isset($_POST['submit']))
       {
           
        $string = $_POST['str'];
           
        $storestr=filter_var($string,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

        echo $storestr;
           
       }
    ?>
</body>
</html>
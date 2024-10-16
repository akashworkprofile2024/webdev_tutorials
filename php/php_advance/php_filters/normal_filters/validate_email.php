<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
<body>
    <form action="validate_email.php" method="post">
        <label for="userinput">Email</label><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" name="submit" id="submit">
    </form>
    <?php      
        if(isset($_POST['submit']))
        {
            $storeinput=$_POST['email']; 
            if(!filter_var($storeinput,FILTER_VALIDATE_EMAIL)===false)
            {
                echo ("$storeinput is a Valid Email address");
            }else{
                echo ("$storeinput is not Valid Email address");

            }
        }
    ?>
</body>
</html>
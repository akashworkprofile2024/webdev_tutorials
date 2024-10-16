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
    
    <form action="validate_integer.php" method="post">
        <label for="integer">Enter input</label><br>
        <input type="text" name="integer" id="integer"><br><br>
        <input type="submit" name="submit" id="submit">
    </form>

    <?php
       if(isset($_POST['submit'])) 
       {
          $storeinput=$_POST['integer'];
          if(!filter_var($storeinput,FILTER_VALIDATE_INT)==false){
            echo'Integer is valid';
          } else{
           echo 'Integer is not valid';
          }      
       }
    ?>
</body>
</html>

<!-- !filter_var($var,FILTER_VALIDATE_FLOAT) -->


<!-- 

filter_var() and Problem With 0 

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false)

-->
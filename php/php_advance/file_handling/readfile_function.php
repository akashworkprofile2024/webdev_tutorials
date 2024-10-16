<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $storecontent = readfile("file.txt");
       echo $storecontent; 
    ?>
</body>
</html>

<!-- The readfile() function is useful if all you want to do is open up a file and read its contents. -->
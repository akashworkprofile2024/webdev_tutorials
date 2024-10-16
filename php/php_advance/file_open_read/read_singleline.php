<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $openfile = fopen("../file_handling/file.txt","r");
        echo fgets($openfile);
        fclose($openfile);
    ?>
</body>
</html>

<!-- The fgets() function is used to read a single line from a file. -->
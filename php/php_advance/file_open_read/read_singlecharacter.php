<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $myfile = fopen('../file_handling/file.txt',"r");
    //    output One character until end of file;

    while(!feof($myfile)){
        echo fgetc($myfile);
    }
    fclose($myfile);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $myfile = fopen("../file_handling/file.txt","r") or die ("Unable to open File!");
       
       while(!feof($myfile)){
        echo fgets($myfile).'<br>';
       }
       fclose($myfile);
    ?>
</body>
</html>

<!-- 

The feof() function checks if the "end-of-file" (EOF) has been reached.
The feof() function is useful for looping through data of unknown length.

-->
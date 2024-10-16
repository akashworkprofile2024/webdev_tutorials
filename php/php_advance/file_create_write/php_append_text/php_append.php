<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $openfile = fopen("appendfile.txt",'a') or die ("Unable to Open File");
    //   First Entry
       $txt = "Python language \n";
       fwrite($openfile, $txt);
    
    // Second Entry
       $txt = "Java language \n";
       fwrite($openfile, $txt);
       
       fclose($openfile);
    ?>
</body>
</html>
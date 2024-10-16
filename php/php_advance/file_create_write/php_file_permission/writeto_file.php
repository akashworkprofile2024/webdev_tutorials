<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $openfile=fopen("createfile.txt","w") or die('Unable to open file!');
      
    // first entry    
       $text = "This is First Entry \n";
       fwrite($openfile, $text);

     // secondary entry    
       $text="This is Second Entry \n";
       fwrite($openfile, $text);
       fclose($openfile);
    ?>
</body>
</html>
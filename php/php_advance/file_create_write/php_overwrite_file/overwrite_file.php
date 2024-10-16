<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $overwritefile = fopen("createfile.txt","w") or die("Unable to open file");
        
        $text = "HTML Hyper text markup language\n";
        fwrite($overwritefile, $text);
        
        $text = "PHP Personal Home Page\n";
        fwrite($overwritefile, $text);
        fclose($overwritefile);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $jsperson='{"Person1":"Akash"}';
       $jsage='{"Personage":50}';

       $fetchperson=json_decode($jsperson);
       $fecthage=json_decode($jsage);

       echo "$fetchperson->Person1"."<br>";
       echo "$fecthage->Personage";


    ?>
</body>
</html>
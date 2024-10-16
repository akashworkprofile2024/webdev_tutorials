<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $storetime=mktime(11,14,60,9,21,2024);
       echo 'Create Date is '.date("d-m-Y    h:i:sa",$storetime);
    ?>
</body>
</html>

<!-- mktime(hour, minute, second, month, day, year)  -->
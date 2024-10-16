<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $jsperson= '{"Person1":"Akash","Person2":"Rahul","Person3":"Riya"}';
       $jsage= '{"Peter":35,"Ben":37,"Joe":43}';

       var_dump(json_decode($jsperson));
       echo "<br><br>";
       var_dump(json_decode($jsage));
    ?>
</body>
</html>

<!-- The json_decode() function is used to decode a JSON object into a PHP object or an associative array. -->
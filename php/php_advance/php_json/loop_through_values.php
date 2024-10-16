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
        $obj = json_decode($jsperson);

        foreach($obj as $key=> $value){
            echo 'People: '.$key .' '.'Name:' . $value . "<br>";
        }

    ?>
</body>
</html>
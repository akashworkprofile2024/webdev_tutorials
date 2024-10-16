<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name=array('person1'=>'Akash', 'person2'=>'Rahul','person3'=>'Riya');
        $age=array('age1'=>22, 'age2'=>25,'age3'=>26);
        echo json_encode($name).'<br><br>';
        echo json_encode($age);
    ?>
</body>
</html>
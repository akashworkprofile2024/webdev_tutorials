<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $store = strtotime("10:30pm September 21 2024");
        echo "Create Date is ".date("d-m-Y h:i:sa",$store).'<br>';

        $store1=strtotime('tomorrow');
        echo date("d-m-Y h:i:sa",$store1).'<br>';

        $store2=strtotime("next saturday");
        echo date("d-m-Y h:i:sa",$store2).'<br>';

        $store3=strtotime("+3 months");
        echo date("d-m-Y h:i:sa",$store3).'<br>'.'<br>';

        echo "More Examples".'<br>';

        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        while($startdate < $enddate){
            echo date("M d",$startdate).'<br>';
            $startdate = strtotime("+1 week",$startdate);
        }


        echo "<br><br>";

        $d1store=strtotime("September 04");
        $d2store=ceil(($d1store-time())/60/60/24);
        echo "There are " . $d2store ." days until 4th of July.";
         

    ?>
</body>
</html>

<!-- strtotime(time, now) -->
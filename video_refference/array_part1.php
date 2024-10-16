<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo' Print Array elements along with index'.'<br>';
        $ar=array("indore","pune","delhi",'Rajkot','Raipur','Kolkata');
        print_r($ar);
        echo '<br><br>'; 
    ?>

    <?php
        echo 'Print Array Every single Element using index'.'<br>';
        for($i=0;$i<count($ar);$i++)
        {
            echo $ar[$i].'<br>'.'<br>';
            
        }
        
    ?>

    <?php
    echo 'Print Array Elements Using While Loop'. '<br>'.'<br>';
     $y=0;
     while($y<count($ar))
     {
        echo  $ar[$y];
        $y++;
        echo '<br>'. '<br>'; 
     }
    ?>


    <?php
    echo 'Print Array Using Foreach Loop'.'<br>';
    foreach($ar as $m)
    {
        echo $m.'<br>'.'<br>';
    }
    ?>


    <?php
      echo 'Associative Array (Access full / indexing)'.'<br>';
      $asso=["a"=>"indore","b"=>"delhi","c"=>"kolkata"];
      print_r($asso);
      echo '<br>'.'<br>';
     
      $store=$asso["a"];
      echo $store .'<br>'.'<br>';
    ?>
    

    <?php
      echo 'Array Slicing'.'<br>';
      $newarray=array_slice($ar,0,3,true);
      print_r($newarray);
    ?>

    
    
</body>
</html>

<!-- Simple array -->
<!-- Associative array -->


 
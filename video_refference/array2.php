<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     $arr1=array("Mon","Tue","Wed",'Sat');
     $arr2=array('Mon','Wed','Thus','Feb','Tue');
     $arr3=array('Mon','Wed','Fri','Jan','Sat');


     echo '<h3>Array Intersect and Different</h3>';

     $newarr = array_intersect($arr1,$arr2); // fetch same element from array
      print_r($newarr);
      echo '<br>'.'<br>';

     $newarrdiff = array_diff($arr1,$arr2); //fetch different element from array
     print_r($newarrdiff);
     echo "<br>".'<br>';
     
    $array3inter = array_intersect($arr1,$arr2,$arr3);
    {
        print_r($array3inter);
        echo "<br>".'<br>';
    }

    $array3diff = array_diff($arr1,$arr2,$arr3);
    {
        print_r($array3diff);
        echo "<br>".'<br>';
    }
 
     ?>

     <!--  fetch Unique element -->
     <?php
      echo '<h3>Unique Array</h3>';
      $uniquearr = array('btech','mca','btech','bba','bba','bca','Btech','mtech');
      $uniquearr = array_unique($uniquearr);
      print_r($uniquearr);
      echo '<br>'.'<br>';
     ?>

     <!--  Aray Map -->
     <?php
      echo '<h3>Array Map</h3>';
        function multiply($n)
        {
            return $n*5;
        } 
        $arrmap = array(5,10,20,30,40,50,60);
        $arrmap = array_map('multiply',$arrmap);
        print_r($arrmap);
        echo '<br>'.'<br>';
     ?>


    <?php
          function evenodd($check)
          {
              if($check%2==0){
                 echo $check.' is Even'.'<br>';
              }else{
                echo $check.' is Odd'.'<br>';
              }
          }
          $checkevenodd = array(1,2,3,4,5,6,7,8,9,10);
          $checkevenodd=array_map('evenodd',$checkevenodd);
          print_r($checkevenodd);
          echo '<br>'.'<br>';
    ?>


    
     <?php
     echo '<h3>Range function on Array</h3>';
       $rangearr=range(1,20);
       print_r($rangearr);
       echo '<br>'.'<br>';

       foreach($rangearr as $rangeresult)
       {
        print_r($rangeresult);
        echo '<br>';
       }
        
       
     ?>
     

     
</body>
</html>

<!-- 
 array_intersect
 array_diff
 array_unique
 array_map
-->


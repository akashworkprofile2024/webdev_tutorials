<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo '<h3>User Define Functions</h3>'; 

       function display() //Defination of function
       {
          echo "This is a function code";   
       }
      
       display();
       echo '<br>'; // Calling of Function
       display();
       echo'<br><br>';
       echo "End Program".'<br><br>';
       
    ?>

    <?php
    echo '<h3>Parameter Passing</h3>';
    function sum($a,$b) //Parameters
     {
        $c=$a+$b;
        echo 'Using Prameter: '.$c.'<br>';
    }
    //   main
         sum(20,50); //Arguments
         sum(100,50); //Arguments
         sum(200,50); //Arguments
         echo '<br>';
    ?>


    <?php
    
    echo'<h3>Parameters var args</h3>';

      function store(...$x) //Parameters var args
      {
           foreach($x as $m)
           { 
                echo $m;
           }   
     } 
     //   main
          store(20,50); //Arguments
          echo'<br>';
          store(100,200,300); //Arguments
          echo "<br>";
          store(200,50,10); //Arguments
    ?>


    <?php
    echo'<h3>Parameters Addition var args</h3>';
     
    function store1(...$g)
     {
        $sum=0;
         foreach($g as $l)
         {    
              $sum=$sum+$l;
            //   echo "Sum is: ".$sum;
         } 
         echo "Sum is: ".$sum; 
     }
       
    
     //   main
     store1(20,50); //Arguments
     echo'<br>';
     store1(100,200,300); //Arguments
     echo "<br>";
     store1(200,50,10); //Arguments
     echo'<br><br>';
    ?>


     <?php
        echo '<h3>Return by Value</h3>';  

        function factorial($n)  // return by value
        {
          $f=1;
          while($n!=0)
          {
              $f=$f*$n;
              $n--;
          }
          return $f;
      }

      // main
      $n=factorial(5);
      echo "Factorial is: ".$n;
     ?>


     
      <?php
      echo "<h3>Copy bt value Copy by reference</h3>";
      function displayreturn($xx,$yy) // copy by value 
      {
         $xx=$xx+100;
         $yy=$yy+200;
      }

      $xx=50;
      $yy=20;
      displayreturn($xx,$yy);
      echo $xx.' '.$yy.'<br><br>';

      ?>
     
     <?php
     function displayreturn1(&$ee,&$rr) // copy by reference
      {
         $ee=$ee+100;
         $rr=$rr+200;
      }

      $ee=50;
      $rr=20;
      displayreturn1($ee,$rr);
      echo $ee.' '.$rr.'<br>';

      ?>
      
     
   
     

</body>
</html>

<!-- 
FUNCTION MODULE TYPE : 
INBUILT DEFINE FUNCTION
USER DEFINE FUNCTION 
-->
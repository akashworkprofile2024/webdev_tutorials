<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operands</title>
</head>
<body>
    <?php
    $a=5;
    $b=2;
    echo "Numbers are: ". '$a = '.$a .' '. '$b = '.$b;

    echo "<h3>Arithematic Operator</h3>";
    echo 'Use + = '.$a+$b.'<br>';
    echo 'Use - = '.$a-$b.'<br>';
    echo 'Use * = '.$a*$b.'<br>';
    echo 'Use ** = '.$a**$b.'<br>';
    echo 'Use % = '.$a%$b.'<br>';
    echo 'Use / = '.$a/$b.'<br>';

    echo "<h3>Relational Operator</h3>";
    echo 'Use >  : '.(5>1).'<br>';
    echo 'Use >=  : '.(5>=5).'<br>';
    echo 'Use >=  : '.(5>=2).'<br>';
    echo "Use <  : ".(5<1).'<br>';
    echo "Use == :".(5==5).'<br>';
    echo "Use int == string :".(5=='5').'<br>';
    echo "Use int === string :".(5==='5').'<br>'; // Check datatype with Value
    echo "Use int < > string :".(5<>'5').'<br>';
    echo "Use int <=> string :".(50<=>'15').'<br>';
    echo "Use int <=> number :".(50<=>15).'<br>';
    echo "Use int <=> string :".(50<=>'50').'<br>';
    echo "Use int <=> number :".(50<=>50).'<br>';
    echo "Use int <=> string :".(5<=>'50').'<br>';
    echo "Use int <=> number :".(5<=>50).'<br>';

    echo "<h3>Increment Operator</h3>";
     $incre = 50;
     echo ++$incre.'<br>';
     
     $postincre = 50;

      echo $postincre++.'<br><br>';

    //  practice code
    echo "<h3>Practice Code</h3>";

      $x=5;
      $y=++$x;
      echo $y.'<br>';
      $z=$y--;
      echo $z.'<br>';
      $x=++$y;
      echo $x.'<br>';
      $d = $x + ++$x + $x++;
      echo $d."<br>";






      

  

     
   




    
    

    

    
     

        
    ?>
</body>
</html>

<!-- 
   Unary Operator    ++a --b ~a    single operand
   Binary Operator   * - + / %     Two operand
   Ternary Operator   ?:            conditional operand 
   Arithmetic Operator
   Relational Operator
-->


<!--
 Arithmetic Operator  +,  -  , * ,  ** ,  %  , /
 Relational Operator  > , < , <= , => , == , != , ===  , !== , <> 
 Increment Decrement Operator  ++a , a++ , a-- , --a
 Logical Operator   && , || , !
 String Operator 
 Array Operator
 Conditional assignment Operator   
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // Logical operator
     echo 'Logical Operator'.'<br><br>';   
     $a=50;
     $b='50';
     if($a and $b){
       echo'allgood'.'<br><br>';
     }else{
        echo'allbad'.'<br><br>';
     }

    //  String Operator
    echo 'String Operator :'.'<br><br>';   
    
    $x='StringaX';
    $y='StringY';
    $concate=$x.' '.$y;
    echo $concate.'<br><br>';

    $z='Green ';
    $u='Apple';
    $z.=$u;
    echo $z.'<br>';    
    
     
    echo '<h3>Conditional Operator:</h3>';

    $w=50;
    $r=100;
    $store=$w>$r? 'First number is Greater':'Second number is Greater'; 
    $store1=500? 'Hello':'Friends';  
    echo $store.'<br><br>';
    echo$store1;
  
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
 String Operator  . , .= 
 Array Operator
 Conditional assignment Operator   ?:
-->
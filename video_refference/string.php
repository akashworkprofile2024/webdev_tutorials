<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mystr='Data String php length';
        echo $mystr;
        $mystr = strlen($mystr); // strlen = count string lenght
        echo ' = '.$mystr.'<br><br>';
    ?>

   <?php
        $mystr='Data String Word Count';
        echo $mystr;
        $mystr = str_word_count($mystr); // strlen = count string lenght
        echo ' = '.$mystr.'<br><br>';
    ?>

<?php
        $mystr='Data String Chunk ';
        echo $mystr;
        $mystr = chunk_split($mystr,2,'||'); // chunk_split = split every after two words
        echo ' = '.$mystr.'<br><br>';
?>


<?php
        $mystr='Data String Splitting';
        echo $mystr;
        $newarray=str_split($mystr,5); // str_split: string split into 5 and store into array
        echo ' = ';
        print_r($newarray); echo '<br><br>';
?>

<?php
        $mystr='data string to upper';
        echo $mystr;
        $mystr = strtoupper($mystr); // strtoupper = string uppercase
        echo ' = '.$mystr.'<BR><BR>';
?>

<?php
        $mystr='DATA STRING TO LOWER';
        echo $mystr;
        $mystr = STRTOLOWER($mystr); // strtolower = string lowercase
        echo ' = '.$mystr.'<br><br>';
?>

<?php
        $mystr='Data String Count Substring Data ';
        echo $mystr;
        $mystr = substr_count($mystr,'Data'); // substr_count
        echo ' = '.$mystr.'<br><br>';
?>


<?php
        $mystr='upercase the first char of the string';
        echo $mystr;
        $mystr = ucfirst($mystr); 
        echo ' = '.$mystr.'<br><br>';
?>

<?php
        $mystr='Lower The First Char Of The String ';
        echo $mystr;
        $mystr = lcfirst($mystr); 
        echo ' = '.$mystr.'<br><br>';
?>

<?php
       $str1 = 'Delhi';
       $str2 = 'Delhi';
       if(strcmp($str1,$str2)==0){
          echo $str1.' ',$str2.' = '.'String are Same'.'<br><br>';
       }else{
        echo $str1.' ',$str2.' = '.'String are not Same'.'<br><br>';
       }       
?>

<?php
       $str1 = 'Delhi';
       $str2 = 'delhi';
       if(strcasecmp($str1,$str2)==0){   // strcasecmp = True on case sensitive
          echo $str1.' ',$str2.' = '.'String are Same'.'<br><br>';
       }else{
        echo $str1.' ',$str2.' = '.'String are not Same'.'<br><br>';
       }       
?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
          function my_callback($item)
          {
              return strlen($item);
          }

          $string = ["html","php","javascript","Css"];
          $lengths = array_map('my_callback',$string);
          print_r($lengths);
     ?>
</body>
</html>

<!-- 

A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.

Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
       echo "Read File Using Fopen function".'<br>';
       $storetcontent = fopen("../file_handling/file.txt" , "r") or die("Unable to read").'<br>';
       echo fread($storetcontent,filesize("../file_handling/file.txt"));
       fclose($storetcontent);
       
       echo '<br><br>';
       
       $storetcontent1 = fopen("../file_handling/file.txt" , "r") or die("Unable to read").'<br>';
       echo "File Close using Fclose function".'<br>';
       fclose($storetcontent1);
       echo fread($storetcontent1,filesize("../file_handling/file.txt"));
       

    ?>
</body>
</html>


<!-- 

The fread() function reads from an open file.
The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read. 

The fclose() function is used to close an open file.
-->



<!-- 

r 	Open a file for read only. File pointer starts at the beginning of the file

w 	Open a file for write only. Erases the contents of the file or creates 
a new file if it doesn't exist. File pointer starts at the beginning of the file

a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist

x 	Creates a new file for write only. Returns FALSE and an error if file already exists

r+ 	Open a file for read/write. File pointer starts at the beginning of the file

w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file

a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist

x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists

-->
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['filetoupload']['name']);
$uploadOk=1;

$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// check if image file is a actual image or fake image

if(isset($_POST['submit'])){
    $check = getimagesize($_FILES['filetoupload']['tmp_name']);
    if($check !== false){
        echo "File is an image - ".$check['mime'].'.';
        $uploadOk = 1;
    }else{
       echo 'File is not an image';
       $uploadOk = 0; 
    }
}
   
?>


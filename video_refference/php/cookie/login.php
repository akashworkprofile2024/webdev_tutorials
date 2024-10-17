 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body style='background-color:black'>

    <div class="container-sm d-flex justify-content-center mt-5 p-5">
        <form action="cookie_dashboard.php" method='post'>
            <label class='text-light' for="username">Username</label><br>
            <input type="text" name="username" id="username" placeholder="enter username"><br><br>

            <label class='text-light' for="pass">Password</label><br>
            <input type="password" name="pass" id="pass" placeholder="****..."><br><br>
            
            <div class="d-flex justify-content-center">
            <input type="submit" id="submit" name="submit" value="submit">&nbsp&nbsp
            <input type="reset" id="reset" name="reset" value="Reset">
            </div> 
        </form>

    </div>
    
   
</body>
</html>
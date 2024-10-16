<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate_ipv6_address.php" method="post">
        <label for="">IPV6</label>&nbsp;&nbsp;
        <input type="text" name="ipv6" id="ipv6">&nbsp;&nbsp;
        <input type="submit" name="submit" id="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $ip = $_POST['ipv6'];

            if(!filter_var($ip,FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false)
            {
                echo "$ip is a valid IPv6 address";
            }else{
                echo "$ip is not a  valid IPv6 address";

            }

        }
    ?>
</body>
</html>

<!-- 2001:0000:130F:0000:0000:09C0:876A:130B -->
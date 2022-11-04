<?php
 
if(isset($_POST['submit'])){

    $username = $_POST['username'];


    // kreiranje kolacica
    setcookie('username',$username, time()+ 60*60);

    header('Location: home.php');
    exit(); 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Cookies</title>
</head>
<body>
    <h1>PHP Cookies</h1>
<form action="" method="POST">
<input type="text" name="username" placeholder="Username">
<br>
<input type="submit" value="Login" name="submit">

</form>

</body>
</html>
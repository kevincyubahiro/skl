<?php
include('conn.php');
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn , "INSERT INTO users  VALUES( '','$username' , '$password')");
    if ($insert) {
        # code...
      echo "record insrted";
    }
    else{
        echo " failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        Username:<input type="text"name="username" required> <br>
        Password:<input type="password" name="password" required> <br>
        <button name="submit">login</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" autocomplete="off">
       Name: <input type="text"name="username"><br>
       Password: <input type="password" name="password"> <br>
        <button name="submit">login</button>
    
</form>
</body>
</html> 
<?php
include('conn.php');
session_start();
if(isset($_POST['submit'])) {
    # code...
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=mysqli_query($conn ,"SELECT * FROM users where username='$username'  AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header('location:home.php');
    }
    else{
        echo " wrong credentials";
    }

}
?>
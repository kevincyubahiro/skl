<!DOCTYPE html>
<html lang="en">
<head>
   
    
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="form">
    <h2>Login form</h2>
   
    <form action="" method="post" autocomplete="off">

    <input type="text"  name="username" placeholder="Enter your Username" required><br><br>
    <input type="password" name="password" placeholder="Enter your Password"required><br><br>
    <button name="submit">login</button><br>
    <a href="login.php">Create new account</a>
    
    </form>
    </div>
</body>
</html>
<?php
include("conn.php");
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=mysqli_query($conn,"SELECT * FROM trainers WHERE username='$username' AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
        header("location:dash_board.php");
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
}
else{
    echo "<script>alert('please try to create  new account')</script>";
}

}
?>

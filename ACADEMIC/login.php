<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name="username">
        <input type="text"name="username">
        <button name='submit'>login</button>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
  SESSION['username']=$_POST['$username']='username';
  SESSION['password']=$_POST['$password']='password';

    $insert=mysqli_query($conn,"INSERT INTO student VALUES('','$username','$password')");
    
if($insert){
    header("location:select.php");
}
else{
    echo"not inserted";
}
}
?>
?>
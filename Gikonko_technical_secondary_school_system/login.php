<html lang="en">
<head>
    <style>
        body{
            background-color:green;
            margin:120px ;
            padding:50px;
        }
        form{
            background-color:black;
            height:300px;
            width:600px;
        }
        h2{
            color:#fff;
            text-align:center;
        }
        input{
            height:40px;
            width:500px;
            margin:10px;
            text-align:center;
           

        }
        button{
            height:50px;
            width:100px;
            background-color:blue;
            color:#fff;

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">

   
    <form action="" method="post" autocomplete="off">
<h2>create account</h2>
    <input type="text"name="username"placeholder="Enter your Username" required><br><br>
    <input type="password"name="password"placeholder="Enter your Password"required><br><br>
    <button name="submit_button">save</button><br>
    
    </form>
    </div>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit_button'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO trainers VALUES('','$username','$password')");
    if ($insert) {
        header("location:insert.php");
      
    }
    else{
        echo"<script>alert(' Person already exit please try to create account')</script>";
    }
}
?>


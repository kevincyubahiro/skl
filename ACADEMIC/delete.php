<?php
include("conn.php");
$id = $_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM student WHERE id='$id'");
if($delete){
    header("location:select.php");
}
else{
    echo"not deleted";
}

?>
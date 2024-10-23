<?php
$id=$_GET['id'];
include('conn.php');
$delete=mysqli_query($conn,"DELETE FROM trainers WHERE id='$id'");
if($delete){
    header("location:select.php");
}
?>
<?php
$conn=mysqli_connect("localhost","root","","academic");
if($conn){
    echo"connected successfully";
}
else{
    echo"not connected";
}

?>
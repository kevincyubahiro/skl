<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php" style="text-decoration:none">add new users</a><br><br>
    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th colspan="2">operation</th>
        </tr>
        <?php 
        include("conn.php");
        $select=mysqli_query($conn,"SELECT * FROM trainers");
        while($row=mysqli_fetch_array($select)){

        
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['password']?></td>
            <td><a href="delete.php?id=<?php echo $row['id']?>">delete</a></td>
            <td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
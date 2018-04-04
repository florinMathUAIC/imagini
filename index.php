<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'connection.php';
        $sql='SELECT * FROM images;';
        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        ?>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Imagine</th>
            </tr>            
            <?php while ($row=mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><img src="<?php echo $row['image'];?>"></td>
            </tr>
            <?php } ?>
        </table>
        <br><br>
        <a href="upload.php">Upload another image</a>
    </body>
</html>

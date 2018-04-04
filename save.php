<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "connection.php";
        $msg="";
        if(isset($_POST['upload']))
        {
            $target="./images/".basename($_FILES['image']['name']);
            $text=$_POST['text'];
            $sql="INSERT INTO images(title,image) Values ('$text','$target')";
            mysqli_query($con,$sql);
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
            {
                header('Location:index.php');
            }else
            {
                $msg="Vai! Vai! Vai!!!";
            }
        }
        ?>
    </body>
</html>

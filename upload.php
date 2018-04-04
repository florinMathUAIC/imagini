<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="content">
        <form method="post" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="10000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="bla bla"></textarea>
                </div>
            
        </div>
        <div>
        <input type="submit" name="upload" value="Upload Image">
        </div>
        </form>
    </body>
</html>

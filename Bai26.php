<!DOCTYPE html>
<html>
    <head>
        <title>Bài 26</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 26</h1> 
        <?php
            echo php_uname() .'<br/>';
            echo PHP_OS . '<br/>';
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                echo 'This is a server using Windows!'. '<br/>';
            } else {
                echo 'This is a server not using Windows! '.'<br/>';
            }
        ?>
    </body>
</html>
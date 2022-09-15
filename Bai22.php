<!DOCTYPE html>
<html>
    <head>
        <title>Bài 22</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 22</h1>
        <?php
            $full_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            echo $full_url."\n";
        ?>
    </body>
</html>

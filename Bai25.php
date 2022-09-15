<!DOCTYPE html>
<html>
    <head>
        <title>Bài 25</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 25</h1> 
        <?php
            // getenv() gets the value of an environment variable
            $rd = getenv('DOCUMENT_ROOT');
            echo $rd.'<br/>';
        ?>
    </body>
</html>
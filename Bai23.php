<!DOCTYPE html>
<html>
    <head>
        <title>Bài 23</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 23</h1> 
        <?php
            $ketqua ="";
            if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
                echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . '<br/>';
            }
            if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
                echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . '<br/>';
            }
            if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
                echo 'I am using PHP 5, my version: ' . PHP_VERSION . '<br/>';
            }
            if (version_compare(PHP_VERSION, '5.0.0', '<')) {
                echo 'I am using PHP 4, my version: ' . PHP_VERSION . '<br/>';
            }
        ?>
    </body>
</html>
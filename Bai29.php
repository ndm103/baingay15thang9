<!DOCTYPE html>
<html>
    <head>
        <title>Bài 29</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 29</h1> 
        <?php
            print_r(get_extension_funcs("JSON"));
            echo '<br/>';
            print_r(get_extension_funcs("XML")).'<br/>';
        ?>
    </body>
</html>

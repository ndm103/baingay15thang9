<!DOCTYPE html>
<html>
    <head>
        <title>Bài 40</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 40</h1>
        <?php
        $ketqua = "";
        if (isset($_POST["a"])&&isset($_POST["b"]))
        {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $divides=($a%$b);
            $ketqua = $a." chia ".$b." dư ".$divides;
        }
        ?>
        <form action="" method="POST">
            <label for="a_number">Nhập a:</label><br>
            <input type="text" name="a" value=""><br>
            <label for="b_number">Nhập b:</label><br>
            <input type="text" name="b" value=""><br><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>
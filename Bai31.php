<!DOCTYPE html>
<html>
    <head>
        <title>Bài 31</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 31</h1>
        <?php
        $ketqua = "";
        if (isset($_POST["a"])&&isset($_POST["b"]))
        {
            $a = $_POST["a"];
            $b = $_POST["b"];
            echo "Number a =".$a." and b=".$b;
            $temp = $a;
            $a = $b;
            $b = $temp;
            $ketqua = "Number a =".$a." and b=".$b;
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
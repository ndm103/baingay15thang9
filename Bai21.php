<!DOCTYPE html>
<html>
    <head>
        <title>Bài 21</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $ketqua = "";
        if (isset($_POST["a"]))
        {
            $ketqua ="";
            $r = $_POST['a'] > 30 ? "lớn hơn 30"
            : ($_POST['a'] > 20 ? "lớn hơn 20"
            : ($_POST['a'] >10 ? "lớn hơn 10"
            : "Hãy nhập 1 số lớn hơn 10!")); 
            $ketqua ="".$_POST['a']." : ".$r."\n";
        }
        ?>
        <h1>Bài 21</h1>
        <form action="" method="POST">
            <label for="a_number">Nhập 1 số:</label><br>
            <input type="text" name="a" value=""><br>
            <input type="submit" value="Submit">
        </form>  
        <div id ="ketqua">
            <?php
                echo $ketqua;
            ?>
        </div>  
    </body>
</html>
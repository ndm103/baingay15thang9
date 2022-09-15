<!DOCTYPE html>
<html>
    <head>
        <title>Bài 32</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Bài 32</h1>
        <?php
        $ketqua = "";
        if (isset($_POST["a"]))
        {
            $n=$_POST["a"];  
            $sum=0;  
            $i=$n;
            
            while($i!=0)  
            {  
                $x=$i%10;  
                $sum=$sum+$x*$x*$x;  
                $i=$i/10;  
            }
            
            if($n==$sum)  
            {  
                $ketqua = "$n là số Armstrong.";  
            }
            else  
            {  
                $ketqua = "$n không phải là số Armstrong."; 
            }
        }   
        ?>
        <form action="" method="POST">
            <label for="a_number">Nhập a:</label><br>
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
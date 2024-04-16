<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="num">عدد را وارد کنید:</label>
        <input type="text" name="num" id="num">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["num"])){
        $num=$_POST["num"];
       
   
    ?>
    <div>
        فرمول اول:
        <?php
        echo sqrt($num) + ($num ** 2) - (18*$num) +1;
        ?>
    </div>
    <div>
        فرمول دوم:
        <?php
        echo sqrt($num + 10) * ($num + 1);
    }
        ?>
    </div>
</body>
</html>
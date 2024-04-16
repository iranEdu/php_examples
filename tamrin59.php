<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
// عددی که وارد میکنیم را با هر دو فرمول انجام میدهد  
?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="x">عدد را وارد کنید:</label>
        <input type="text" name="x" id="x">
        <label for="y">عدد را وارد کنید:</label>
        <input type="text" name="y" id="y">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["x"])){
        $x=$_POST["x"];
        $y=$_POST["y"];
    ?>
    <div>
        فرمول اول:
        <?php
        echo ($x**3) + (15 * $x) + ($y ** 2) - ($x * $y);
        ?>
    </div>
    <div>
        فرمول دوم:
        <?php
        echo sqrt($x ** 3 + 18 - 10 * $x) + (10*$y);
    }
        ?>
    </div>
</body>
</html>
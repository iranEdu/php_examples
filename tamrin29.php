<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر ماشین را که وارد کردیم عکس و تمام مشخصات ان  را بالا بیاورد
    ?>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">
    <form action="" method="get">
        <input type="text" placeholder="نام ماشین" name="car">
        <button type="submit">دریافت مشخصات</button>
    </form>
    <?php
    $car=$_GET["car"];
    ?>
    <?php
    if($car == "فراری")
    { ?>
    <img src="images/1.jpg" alt="" width="500" height="500">
    <h1>نام ماشین:فراری</h1>
    <h2>قیمت:8500000000</h2>
    <?php }?>
    <?php
    if($car == "چیپ")
    { ?>
    <img src="images/2.jpg" alt="" width="500" height="500">
    <h1>نام ماشین:چیپ</h1>
    <h2>قیمت:8200000000</h2>
    <?php }?>
    <?php
    if($car == "ولو")
    { ?>
    <img src="images/3.jpg" alt="" width="500" height="500">
    <h1>نام ماشین:ولو</h1>
    <h2>قیمت:8100000000</h2>
    <?php }?>
    <?php
    if($car == "کروز")
    { ?>
    <img src="images/4.jpg" alt="" width="500" height="500">
    <h1>نام ماشین:کروز</h1>
    <h2>قیمت:8000000000</h2>
    <?php }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  عدد هر گروه را که وارد کردن نام اعضای همان گروه را بالا بیاورد
    ?>
</head>
<body dir=rtl>
    <form action="" method="post">
        <input type="text" name="number">
        <button type="submit"> دکمه</button>
    </form>
    <?php
    $number=$_POST["number"];
    if($number=="1")
    {
    ?>
    <h1>هریوندی</h1>
    <h1>رضوی</h1>
    <?php
    }
    elseif($number=="2")
    {
    ?>
    <h1>عباسیان</h1>
    <h1>الوانی</h1>
    <?php
    }
    elseif($number=="3")
    {
    ?>
    <h1>چلانی</h1>
    <h1>اسماعیلی</h1>
    <?php
    }
    ?>
</body>
</html>
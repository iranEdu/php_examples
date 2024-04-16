<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر شاعر را که وارد کنیم مشخصات همان شاعر بالا بیاورد
    ?>
    <style>
        h3 , p{
            color: green;
        }
    </style>
</head>
<body dir=rtl>
    <form action="" method="post">
        <select name="sher">
            <option>حافظ</option>
            <option>سعدی</option>
            <option>مولانا</option>
        </select>
        <button type="submit">دکمه</button>
    </form>
    <?php
    $sher=$_POST["sher"];
    ?>
    <?php
    if( $sher== "حافظ")
    {
    ?>
    <h3>قرن هشتم</h3>
        <p>از چشم خود بپرس ما را که می کشد</p>
        <p>جانا گناه طالع و جرم ستاره نیست</p>
        <?php
    }
    elseif($sher=="سعدی")
    {
    ?>
    <h3>قرن هفتم</h3>
        <p>در چشم بامدادان به بهشت برگشودن</p>
        <p>نه چنان لطیف باشد که به روی دوست برگشاد</p>
        <?php
    }
    elseif($sher=="مولانا")
    {
    ?>
    <h3>قرن هفتم</h3>
        <p>روز ها گر رفت گو برو باک نیست</p>
        <p>تو بمان ای آنکه چون تو پاک نیست</p>
        <?php
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام استان خود را که وارد کردیم مرکز استان وجمعیت ان را بالا بیاورد
    ?>
    <style>
        h1{
            color: aqua;
        }
    </style>
</head>
<body dir=rtl>
    <form action="" method="post">
        <select name="sahr">
            <option>تهران</option>
            <option>خراسان جنوبی</option>
            <option>خراسان رضوی</option>
            </select>
            <button type="submit">نمایش </button>
    </form>
    <?php
    $sahr=$_POST["sahr"];
    ?>
    <?php
    if($sahr=="تهران")
    {
    ?>
    <h1>مرکز استان:تهران</h1>
    <h2>جمعیت:2000000</h2>
    <?php
    }
    elseif($sahr=="خراسان جنوبی ")
    {
    ?>
    <h1>مرکز استان:بیرجند</h1>
    <h2>جمعیت:300000</h2>
    <?php
    }
    elseif($sahr=="خراسان رضوی")
    {
    ?>
     <h1>مرکز استان:مشهد</h1>
    <h2>جمعیت:500000</h2>
    <?php
    }
    ?>
</body>
</html>
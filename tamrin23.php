<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // نام و نام خانوادگی و کدملی را در ورودی های خودشان وارد میکنیم و انها را در متن نمایش میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="number" name="kod_meli">
        <button type="submit">ثبت</button>
    </form>
    <?php
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $kod_meli=$_POST["kod_meli"];
    echo "مشخصات شما یا نام $first_name و نام خانوادگی $last_name و کد ملی $kod_meli ثبت شد";
    ?>
</body>
</html>
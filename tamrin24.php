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
        <div>
        <input type="text" name="frest_name">
        </div>
        <div>
        <input type="text" name="last_name">
        </div>
        <div>
        <input type="number" name="kod_male">
        </div>
        <div>
        <button type="submit">ثبت</button>
        </div>
    </form>
    <?php 
    if (isset($_POST["frest_name"])){
    $frest_name=$_POST["frest_name"];
    $last_name=$_POST["last_name"];
    $kod_male=$_POST["kod_male"];
    echo "مشحصات شما با نام $frest_name ونام خانوادگی $last_name و کد ملی $kod_male ثبت شد";
    }
    ?>
</body>
</html>
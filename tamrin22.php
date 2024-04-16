<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نمره را در ورودی وارد میکنیم و همان را برایمان نمایش میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" name="nomreh">
        <button type="submit">بررسی</button>
    </form>
    نمره شما
    <?php
    $nomreh=$_POST["nomreh"];
    echo $nomreh;
    ?>
</body>
</html>
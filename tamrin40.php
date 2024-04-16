<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // دو عدد را وارد میکنیم و علامت جمع یا تفریق را انتخاب میکنیم وان را اجرا میکند
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" name="num1">
        <select name="amalgar" id="">
            <option>+</option>
            <option>-</option>
        </select>
        <input type="number" name="num2">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["num1"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $amalgar=$_POST["amalgar"];
    if($amalgar == "+"){
        echo $num1 + $num2;
    }
    elseif($amalgar == "-"){
        echo $num1 - $num2;
    }
    else{
        echo "عملگر اشتباه است";
    }
    }
    ?>
</body>
</html>
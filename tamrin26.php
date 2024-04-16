<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // عدد ماه را در ورودی وارد میکنیم اگر درست بود اسم ماه را نشان میدهد در غیر این صورت بگویید شماره شما نامعتبر است
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" placeholder="ماه:" name="month">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["month"])){
    $month=$_POST["month"];
    if($month==1){
        echo"فروردین";
    }
    else if($month==2){
        echo"اردیبهشت";
    }
    else if($month==3){
        echo"خرداد";
    }
    else if($month==4){
        echo"تیر";
    }
    else if($month==5){
        echo"مرداد";
    }
    else if($month==6){
        echo"شهریور";
    }
    else if($month==7){
        echo"مهر";
    }
    else if($month==8){
        echo"ابان";
    }
    else if($month==9){
        echo"اذر";
    }
    else if($month==10){
        echo"دی";
    }
    else if($month==11){
        echo"بهمن";
    }
    else if($month==12){
        echo"اسفند";
    }
    else{
        echo"شماره شما نامعتبر هست";
    }
}
    ?>
</body>
</html>
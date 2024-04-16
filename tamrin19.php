<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  شماره هر ماه را که وارد کنیم همان را می اورد در غیر این صورت میگویید شماره شما نامعتبر است
    ?>
</head>
<?php
$month=1;
?>
<body dir=rtl>
    <div>
    <?php
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
    ?>
    </div>
</body>
</html>
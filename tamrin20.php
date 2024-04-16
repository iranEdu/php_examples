<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  اگر بین تعداد ان فصل باشد همان فصل را بالا میاورد و اگر صفر یا بیشتر ان باشد میگویید شماره این فصل نامعتبر است
    ?>
</head>
<?php
$month=5;
?>
<body dir=rtl>
    <div>
    <?php
    if($month<=0){
        echo"شماره این فصل نامعتبر است";
    }
    else if($month<=3){
        echo"بهار";
    }
    else if($month<=6){
        echo"تابستان";
    }
    else if($month<=9){
        echo"پاییز";
    }
    else if($month<=12){
        echo"زمستان";
    }
    else{
        echo"شماره این فصل نامعتبر است";
    }
   ?>
    </div>
</body>
</html>
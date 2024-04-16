<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  از عدد یک شروع میشود تا قبل از 100 به متغیر اضافه میشود
    ?>
</head>
<body dir="rtl">
    <?php
    $sum=0;
    for($i=1; $i <= 100 ;$i++){
        $sum=$sum+$i;
    }
    echo $sum ;
    ?>
</body>
</html>
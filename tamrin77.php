<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //از 20 شروع میشود و یکی یکی کم میشود تا قبل از صفر ادامه پیدا میکند  
    ?>
</head>
<body dir="rtl">
    <?php
    for($i=20; $i > 0 ;$i--){
        echo $i**2;
        echo "<br/>";
    }
    ?>
</body>
</html>
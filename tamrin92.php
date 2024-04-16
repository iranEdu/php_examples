<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   اندازه عکس را هر بار 20 کم یکند تا زمانی که به 120 برسد
    ?>
</head>
<body dir=rtl>
    <?php
    for($i=200;$i>=120;$i-=20){
    ?>
    <img src="images/1.jpg" alt="" width="<?php echo $i ?>">
    <?php
    }
    ?>
</body>
</html>
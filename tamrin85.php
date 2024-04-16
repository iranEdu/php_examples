<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  از عدد 100 سه تا سه تا کم میکنیم و در اخر همه را باهم جمع میکنیم
    ?>
</head>
<body dir=rtl>
    <?php
    $sum=0;
    for($i=100;$i>0;$i-=3){
        echo $i ;
        echo "</br>";
        if($i != 1){
        echo "+ <br>";
        }
        $sum=$sum+$i;
    }
    echo "__________________";
    echo"<br>";
    echo $sum;
    ?>
</body>
</html>
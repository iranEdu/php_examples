<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   اعداد را میگیرد و در اخر با هم جمع میکند
    ?>
</head>
<body>
    <?php
    $sum=0;
    $number=[4,8,9,10,7,15];
    for($i=0;$i<count($number);$i++){
        $nn= $number[$i];
        echo "$nn + ";
        $sum +=$nn; 
    }
    echo "= $sum";
    ?>
</body>
</html>
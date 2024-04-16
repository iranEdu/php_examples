<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //اگر متغیر 1 بزرگ تر باشد بگوید 1 بزرگ تر است در غیر این صورت بگوید 2 بزرگ تر است 
    ?>
</head>
<body dir=rtl>
    <?php
    $num1=85;
    $num2=69;
    if($num1>$num2){
        echo "$num1 بزرگ تر است";
    }
    else{
        echo"$num2 بزرگ تر است";
    }
    ?>
</body>
</html>
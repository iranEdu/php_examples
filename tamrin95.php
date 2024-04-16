<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   نام ها را از اخر به اول زیر هم نشان میدهد
    ?>
</head>
<body dir="rtl">
    <?php
    $names=["mahdi" , "abas" , "ali" ,"mamad gholy" ];
    for($i=count($names)-1;$i>=0;$i--){
        $sum=$names[$i];
        echo "<br>";
        echo $sum;
    }
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اول معدل قبل تغییر را نشان میدهد بعد معدل بعد تغییر و نمره یک تا پنج را نشان میدهد 
    ?>
</head>
<body dir="rtl">
    <?php
    $moadel=array(18 , 14 , 16 , 18 ,15);
    $sum=$moadel[0] +$moadel[1]+$moadel[2]+$moadel[3]+$moadel[4];
    $nomreh=$sum/5;
    echo"معدل قیل تغیر:$nomreh";
    echo "</br>";
    $moadel[1]=19;
    $sum=$moadel[0] +$moadel[1]+$moadel[2]+$moadel[3]+$moadel[4];
    $nomreh2=$sum/5;
    echo "معدل بعد تغییر:$nomreh2";
    echo"</br>";
    echo "نمره یک:$moadel[0]";
    echo"</br>";
    echo "نمره دو:$moadel[1]";
    echo"</br>";
    echo "نمره سه:$moadel[2]";
    echo"</br>";
    echo "نمره چهار:$moadel[3]";
    echo"</br>";
    echo "نمره پنج:$moadel[4]";
    ?>
</body>
</html>
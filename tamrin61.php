<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
// عدد هر میوه را انتخاب کنیم اسم همان را نشان میدهد
//معدل عدد های وارد شده را نشان میدهد 
?>
</head>
<body dir="rtl">
    <?php
    $miveh=array("سیب" , "انگور" , "موز" , "هلو");
    echo $miveh[1];
    echo "<hr>";
    echo $miveh[3]
    ?>
    <hr>
    <?php
    $moadel=array(19,20,18,17,19);
    $sum=$moadel[0]+$moadel[1]+$moadel[2]+$moadel[3]+$moadel[4];
    echo "معدل". $sum/5;
    ?>
</body>
</html>
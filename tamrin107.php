<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   هر عددی که بالای 10 باشد مینویسد قبول و هر عددی زیر 10 باشد مینویسد رد
    ?>
</head>
<body dir="rtl">
    <?php
    $nomreh=[10,15,8,19,5,17,16,1,0,];
    foreach($nomreh as $value){
        if($value>=10){
            echo "$value قبول";
            echo "</br>";
        }
        else{
            echo "$value رد";
            echo "<br>";
        }
    }
    ?>
</body>
</html>
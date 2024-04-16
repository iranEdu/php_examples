<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اعداد فرد تا قبل 7 را نشان میدهد   
    ?>
</head>
<body dir=rtl>
    <?php
    $numbers=array(1,4,5,9,5,10,11);
    for($i=0; $i <7;$i++){
        echo "$i <br>";
        $i=$numbers[$i];
    }
    ?>
</body>
</html>
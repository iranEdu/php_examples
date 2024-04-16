<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   هر عدد را جلوی حرف خودش قرار میدهد
    ?>
</head>
<body dir=rtl>
    <?php
    $numbres=[17,15,19,22,19];
    $numes=["a","b","c","d","e"];
    for($i=0;$i<count($numbres);$i++){
        echo $numes[$i]."=".$numbres[$i];
        echo "<br>";
    }
    ?>
</body>
</html>
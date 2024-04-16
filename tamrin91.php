<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   اعداد بزرگ تر از 50 را نشان میدهد
    ?>
</head>
<body dir=rtl>
    <?php
    $namber=array(67,10,91,85,69,154,41,71,50,12);
    for($i=0; $i<10; $i++){
        $num=$namber[$i];
      if($num>50){
        echo $num ;
        echo "<br>";
      }
    }
    ?>
</body>
</html>
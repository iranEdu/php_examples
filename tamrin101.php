<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   ضرب عدد یک تا ده را نشان میدهد
    ?>
</head>
<body>
    <?php
    $i=1;
    $j=1;
    while($i<=10){
        while($j<=10){
            echo $i*$j;
            echo " ";
            $j++;
        }
        echo "<br>";
        $i++;
        $j=1;
    }
    ?>
</body>
</html>
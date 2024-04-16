<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print"درباره من" ?></title>
    <?php
    //متغیر ها را میگیرد و در متن انها را نشان میدهد
    ?>
</head>
<body dir=rtl>
    <div>
        <?php
        echo"<h1> درباره من </h1>";
        $name="مهدی";
        $family="هریوندی";
        echo"نام من $name و نام خانوادگی $family است";
        ?>
    </div>
    <div>
        <?php
        $year=1385;
        $age=1402 - $year;
        echo"سال تولد من $year می باشد (سن: $age )";
        ?>
    </div>
</body>
</html>
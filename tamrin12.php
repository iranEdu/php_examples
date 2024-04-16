<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // مسائلی که درست باشد را با 1 نشان میدهد و بقیه را نشان نمیدهد
    ?>
</head>
<body>
    <div>
        <?php
        echo 5==2;
        ?>
    </div>
    <div>
        <?php
        echo 5>4;
        ?>
    </div>
    <div>
        <?php
        echo "ali"=="ali";
        ?>
    </div>
    <div>
        <?php
        echo "Ali"=="ali"
        ?>
    </div>
    <div>
        <?php
       $a=7;
       $b=2;
       echo $a>=$b
        ?>
    </div>
    <div>
        <?php
       $a=7;
       $b=2;
       echo $a>=7
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //نمره را نمایش میدهد اگر بالای 10 باشد میگوید قبول درغیر این صورت میگویید رد  
    ?>
</head>
<body dir=rtl>
    <div>
        <?php
        $nomreh=9.99;
        echo"نمره شما $nomreh است";
        ?>
    </div>
    <div>
        <?php
        if($nomreh>=10){
            echo"وضیعت قبولی:قبول";
        }
        else{
            echo"وضیعت قبولی:رد";
        }
        ?>
    </div>
</body>
</html>
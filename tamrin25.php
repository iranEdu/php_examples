<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر کدملی که ما وارد میکنیم جزو کدملی های که داده شده باشد بگویید قبول
    ?>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">
    <div>
        <h1>سامانه پذیرفته کنکور ملی ایران</h1>
    </div>
    <form action="" method="post">
<input type="number" name="kod_meli">
<button type="submit">بررسی</button>
    </form>
    <div>
        <?php
        if(isset($_POST["kod_meli"])){
        $kod_meli=$_POST["kod_meli"];
        if($kod_meli=="0640965172" || $kod_meli=="0640965171" || $kod_meli=="0640965174"){
            echo "قبول";
        }
    }
        ?>
    </div>
</body>
</html>
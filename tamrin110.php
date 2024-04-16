<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   اگر کد ملی هایی که وارد شده را بزنیم نمره ان را نشان میدهد درغیر این صورت میگوید کد ملی وجود ندارد
    ?>
</head>
<body dir="rtl">
    
    <form action="" method="post">
        <label for="kod">کد ملی</label>
        <input type="kod" name="kod" id="kod">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["kod"])){
    $kod=$_POST["kod"];
    $number=["0640965172"=>20,"0640965178"=>15,"0640965174"=>19,"0640965179"=>20];
    if(isset($number[$kod])){
        echo $number[$kod];
    }
    else {
        echo "کد ملی وجود ندارد";
    }
    }
    ?>
</body>
</html>
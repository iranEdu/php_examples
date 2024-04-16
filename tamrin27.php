<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر عدد ماه هر فصل را وارد کنیم همان فصل را نشان میدهد در غیر این صورت میگویید شماره شما نامعتبر است
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" placeholder="ماه:" name="month">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["month"])){
    $month=$_POST["month"];
    if($month==1 || $month==2 || $month==3){
        echo"بهار";
    }
    else if($month==4 || $month==5 || $month==6){
        echo"تابستان";
    }
    else if($month==7 || $month==8 || $month==9){
        echo"پاییز";
    }
    else if($month==10 || $month==11 || $month==12){
        echo"زمستان";
    }
    else{
        echo"شماره شما نامعتبر هست";
    }
}
    ?>
</body>
</html>
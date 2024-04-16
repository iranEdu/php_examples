<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   نام هر لیگ را که وارد کنیم نام تیم همان لیگ را نشان دهد در غیر این صورت بگوید تیم مورد نظر وجود ندارد
    ?>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">
    <div>
        <h1>جدول لیگ فوتبال جهانی</h1>
    </div>
    <form action="" method="post">
        <input type="text" name="ligh" placeholder="لیگ">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["ligh"])){
    $one=$_POST["ligh"];
    if($one == "انگلیس"){
        echo "منچسترسیتی";
    }
    elseif($one == "اسپانیا"){
        echo "بارسا";
    }
    elseif($one == "ایتالیا"){
        echo "ناپولی";
        
    }
    elseif($one == "ایران"){
        echo "پرسپولیس";
    }
    else{
        echo "تیم مورد نظر وجود ندارد";
    }
}
    ?>
</body>
</html>
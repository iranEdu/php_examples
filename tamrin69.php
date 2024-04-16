<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  هر روز را که وارد کنیم درس ان روز را نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <select name="barnameh" id="">
            <option>شنبه</option>
            <option>یکشنبه</option>
            <option>دوشنبه</option>
            <option>سه شنبه</option>
            <option>چهارشنبه</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["barnameh"])){
        $barnameh=$_POST["barnameh"];
        $roz=array("شنبه" , "یکشنبه" , "دوشنبه" , "سه شنبه" , "چهارشنبه");
        $dars=array("php" , "آمادفاعی-اخلاق حرفه ای-تربیت بدنی" , "wordpress" , "php" , "فارسی-سلامت بهداشت-مدیریت خانواده-هویت");
        if(in_array($barnameh , $roz)){
            $kol=array_search($barnameh , $roz);
            echo $dars[$kol];
        }

    }
    ?>
</body>
</html>
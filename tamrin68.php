<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر غذا را که وارد کنیم قیمت ان را به ما نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="ghaza"></label>
        <select name="ghaza" id="ghaza">
            <option>کباب</option>
            <option>چلو مرغ</option>
            <option>کشت زرد</option>
            <option>قرمه سبزی</option>
        </select>
        <button type="submit">نمایش قیمت</button>
    </form>
    <?php
    if(isset($_POST["ghaza"])){
        $ghaza=$_POST["ghaza"];
        $name=array("کباب" , "چلو مرغ" , "کشت زرد" , "قرمه سبزی");
        $ghemat=array(150000,180000,80000,120000);
        if(in_array($ghaza , $name)){
            $kol=array_search($ghaza , $name);
            echo $ghemat[$kol];
        }
    }
    ?>
</body>
</html>
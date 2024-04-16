<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  هر استان را که وارد میکنیم شهر ان را نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <select name="astan" id="">
            <option>تهران</option>
            <option>خراسان رضوی</option>
            <option>خراسان جنوبی</option>
            <option>سیستان</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["astan"])){
        $astan=$_POST["astan"];
        $name_astan=array("تهران" , "خراسان رضوی" , "خراسان جنوبی" , "سیستان");
        $name_shahr=array("تهران" , "مشهد" , "بیرجند" , "زاهدان");
        if(in_array($astan , $name_astan)){
            $kl=array_search($astan , $name_astan);
            echo "مرکز$name_shahr[$kol]";
        }
    }

    ?>
</body>
</html>
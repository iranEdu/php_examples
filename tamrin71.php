<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  هر شهری را که انتخاب کنیم قیمت و نوع ان را به ما نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="shahr"></label>
        <select name="shahr" id="shahr">
            <option>مشهد</option>
            <option>تهران</option>
            <option>شیراز</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["shahr"])){
        $shahr=$_POST["shahr"];
        $name=array("مشهد" , "تهران" , "شیراز");
        $ghemat=array(170 , 480 , 450);
        $noea=array("vip" , "vip" , "درسا");
        if(in_array($shahr , $name)){
            $kol=array_search($shahr , $name);
          echo "قیمت:$ghemat[$kol]";
            echo "</br>";
            echo "نوع:$noea[$kol]";
        }
    }
    ?>
</body>
</html>
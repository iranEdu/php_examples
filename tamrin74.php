<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام دانش اموز را که وارد میکنیم سال تحصیلی ان را به ما نشان میدهد در غیر این صورت میگویید دانش اموز وجود ندارد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="name">نام</label>
        <input type="text" id="name" name="name">
        <button type="submit">بررسی</button>
    </form>
    <?php
    
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $davazdahom=array("غیاسی" , "هریوندی" , "رضوی" , "برزگری");
        $eleven=array("موسوی" , "هاشمی" , "محمدی" , "رضایی");
        $ten=array("حسینی" , "غلامی" , "ممد زاده");
        if(in_array($name , $davazdahom)){
            echo "12";
        }
        elseif(in_array($name , $eleven)){
            echo "11";
        }
        elseif(in_array($name , $ten)){
            echo "10";
        }
        else{
            echo "دانش اموز وجود نداره";
        }
    }
    ?>
</body>
</html>
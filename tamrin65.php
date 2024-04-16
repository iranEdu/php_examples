<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر هنر جو را که وارد کنیم نمره ان را به ما نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="honar">شماره هنرجو</label>
        <input type="text" name="honar">
        <button type="submit">بررسی</button>
    </form>
    <?php
   
    if(isset($_POST["honar"])){
        $honar=$_POST["honar"];
        $nomreh=array(17,16,18,17,19);
        $name=array("مهدی هریوندی","سید مهدی رضوی","ممد امین نوایی","ممد امین بشکزی","امیر حسن عباسیان");
        if(in_array( $honar, $name)){
         $harivandi=array_search($honar , $name);
        echo " نمره ";
        echo $nomreh[$harivandi];
        }
        else{
            echo "نامعتبر است";
        }
    

    }
    ?>
</body>
</html>
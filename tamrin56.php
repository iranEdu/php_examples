<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  سه نمره را وارد میکنیم اگر میانگین ان یک باشد میگوید نیاز به تلاش بیشتر اگر دو باشد میگوید قابل قبول اگر سه باشد میگوید خوب اگر چهار یا پنج باشد میگوید عالی
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
       <div>
        <label for="num1">نمره 1</label>
        <input type="number" name="num1">
       </div>
       <div>
        <label for="num2">نمره 2</label>
        <input type="number" name="num2">
       </div>
       <div>
        <label for="num3">نمره 3</label>
        <input type="number" name="num3">
       </div>
       <div>
        <button type="submit">محاسبه</button>
       </div>
    </form>
    <?php
    if(isset($_POST["num1"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    $mohasbh=($num1+$num2+$num3)/3;
    $mohasbh=intval($mohasbh);
    switch ($mohasbh) {
        case '1':
            echo "نیاز به تلاش بیشتر";
            break;
        case '2':
            echo "قابل قبول";
            break;
        case '3':
            echo "خوب";
            break;
        case '4':
            echo "عالی";
            break;
        case '5':
            echo "عالی";
            break;
    }
}
    ?>
</body>
</html>
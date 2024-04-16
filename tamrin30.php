<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر ماشین را که وارد کردیم عکس و تمام مشخصات ان  را بالا بیاورد
    ?>
</head>
<body dir="rtl">
    <form action="" method="get">
        <input type="text" name="name_car" placeholder="نام ماشین را وارد کنیدد:">
        <button type="submit"> بررسی </button>
    </form>
    <div>
        <?php
        $car=$_GET["name_car"];
        ?>
        <?php
        if($car == "بنز")
        { 
            ?>
            <div>
            <img src="images/1.jpg" alt="" width="500" height="500">
            </div>
            <div>
                <h1>نام ماشین:بنز</h1>
                <h2>قیمت :8000000000</h2>
            </div>
        <?php
        }
       else if($car == "نیسان gtr")
       {
        ?>
        <div>
            <img src="images/2.jpg" alt="" width="500" height="500">
            </div>
            <div>
                <h1>نام ماشین:نیسان gtr</h1>
                <h2>قیمت :8100000000</h2>
            </div>
       <?php}
       else if($car == "نیسان gtr")
       {
        ?>
        <div>
            <img src="images/3.jpg" alt="" width="500" height="500">
            </div>
            <div>
                <h1>نام ماشین:فراری</h1>
                <h2>قیمت :8110000000</h2>
            </div>
       <?php
    }
    ?>
    </div>
</body>
</html>
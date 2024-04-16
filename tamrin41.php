<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // قیمت هر ماشین را که وارد کنیم عکس ان را نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" placeholder="مبلغ:" name="car">
        <button type="submit">نمایش</button>
    </form>
    <?php
    if(isset($_POST["car"]))
    $car=$_POST["car"];
    if($car < 400000000)
    {
    ?>
    <div>ماشین 1</div>
    <div>قیمت:2500000000</div>
    <img src="images/2.jpg" alt="" width="250px" height="250px">
    <?php
    }
    elseif($car >400000000 && $car <700000000)
    {
    ?>
    <div>ماشین 2</div>
    <div>قیمت:620000000</div>
    <img src="images/3.jpg" alt="" width="250px" height="250px">
    <?php
    }
    elseif($car >700000000)
    {
    ?>
    <div>ماشین 3</div>
    <div>قیمت:850000000</div>
    <img src="images/1.jpg" alt="" width="250px" height="250px">
    <?php
    }
    ?>
  

</body>
</html>
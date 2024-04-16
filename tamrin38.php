<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  اگر کمتر از صفر وارد شود بگوید مبلغ نادرست است 
    //اگر کمتر از مبلغ قابل پرداخت باشد بگوید مبلغ کافی نیست
    //اگر مبلغ بیشتر از مبلغ قابل پرداخت باشد بگوید مبلغ بیشتر از میزان فاکتور است ودر غیر این صورت بگوید پرداخت شد
    ?>
</head>
<?php
$mablagh=150000
?>
<body dir="rtl">
    <h1>فاکتور فروش</h1>
    <div>
    <?php
    echo "مبلغ قابل پرداخت $mablagh";
    ?>
    </div>
    <form action="" method="post">
        <input type="number" name="meghdar">
        <button type="submit">پرداخت</button>
    </form>
    <div>
        <?php
        if(isset($_POST["meghdar"])){
        $meghdar=$_POST["meghdar"];
        if($meghdar < 0){
            echo "مبلغ نادرست" ;
        }
        elseif($meghdar <$mablagh){
            echo "مبلغ کافی نیست" ;
        }
        elseif($meghdar > $mablagh) {
            echo "مبلغ بیشتر از میزان فاکتور است";
        }
        else{
            echo "پرداخت شد";
        }
        }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // هر روغن موتوری که انتخاب کنیم قیمت ان را نشان میدهد
    ?>
</head>
<body dir="rtl">
    <h1>روغن موتور</h1>
    <form action="" method="post">
        <select name="roghan" id="roghan">
            <option>توتال</option>
            <option>بهران</option>
            <option>تک تاز</option>
            <option>پیشتاز</option>
        </select>
        <button type="submit">خرید</button>
    </form>
    <?php
    if(isset($_POST["roghan"])){
        $roghan=$_POST["roghan"];
        switch ($roghan) {
            case 'توتال':
                echo "قیمت برابر 150000 است";
                break;
            case 'بهران':
                echo "قیمت برابر 110000 است";
                break;
            case 'تک تاز':
                echo "قیمت برابر 120000 است";
                break;
            case 'پیشتاز':
                echo "قیمت برابر 170000 است";
                break;
            default:
                # code...
                break;
        }
    }
    ?>
</body>
</html>
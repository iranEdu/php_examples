<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر اسم ماشین بنز را وارد کنیم عکس ان را می اورد 
    //اگر اسم ماشین فراری را وارد کنیم میگوید اسم ماشین فراری است
    //اگر اسم ماشین فراری را وارد کنیم میگوید اسم ماشین بوگاتی است
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <select name="car" id="">
            <option>بنز</option>
            <option>فراری</option>
            <option>بوگاتی</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["car"])){
    $car=$_POST["car"];
    switch ($car) {
            case 'بنز':
               ?>
                <img src="images/1.jpg" alt="" width="250px" height="250px">
               <?php
                break;
            case 'فراری':
                echo "اسم ماشین فراری است";
                break;
            case 'بوگاتی':
                echo "اسم ماشین بوگاتی است";
                break;
        
        default:
            # code...
            break;
    }
}
    ?>
</body>
</html>
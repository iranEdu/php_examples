<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  اگر سن وارد شده بزرگ تر از 0 و کوچیک تر از  1402 باشد و بیشتر از 18 باشد بگوید با موفقیت ثبت نام کرده اید در غیر این صورت بگوید ثبت نام نگردید
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="text" placeholder="نام:">
        <input type="text" placeholder="نام خانوادگی:">
        <input type="number" placeholder="سال تولد:" name="age">
        <button type="submit">ارسال</button>
    </form>
    <?php
    if(isset($_POST["age"])){
    $age=1402-$_POST["age"];
    if($age < 0 || $age > 1402){
        echo "عدد نادرست ادست";
    }
    else if($age >=18)
    {
    ?>
    <img src="images/Untitled-1.png" alt="" width="50px" height="50px">
    با موفقیت ثبت نام گردید
    <?php
  
    }
}

    else
    {
    ?>
    <img src="images/Untitled-2.png" alt="" width="50px" height="50px">
    ثبت نام نگردید
    <?php
    }
    
    ?>
</body>
</html>
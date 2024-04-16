<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
//اگر رمزی که وارد میکنیم بیشتر از کاراکتر داشته باشد میگوید درست است در غیر این صورت میگوید رمز باید بیشتر از شش کاراکتر نیست
?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <div>
        <label for="name">نام کاربری</label>
        <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="password">پسورد</label>
            <input type="text" name="password" id="password">
        </div>
        <div>
            <button type="submit">بررسی</button>
        </div>
    </form>
    <?php
    if(isset($_POST["password"])){
        $password=$_POST["password"];
       
        if(mb_strlen($password) >=6 ){
            echo "درست است";
        }
        else{
            echo "رمز باید شش کاراتر نیست";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر نام کاربری و رمز را درست وارد کند میگوید به سیستم خوش امدی رضا درغیر این صورت میگوید رمز اشتباه است
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="name">نام کاربری</label>
        <input type="text" name="name" id="name">
        <label for="password">پسورد</label>
        <input type="text" name="password" id="password">
        <button type="submit">ورود</button>
    </form>
    <?php
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $password=$_POST["password"];
        if($name == "reza" && $password == "321"){
            echo "WELCOME To SYSTEM Mr REZA";
        }
        else{
            echo "Password Is Wrong";
        }
    }
    ?>
</body>
</html>
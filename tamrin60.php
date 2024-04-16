<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
//کلمه که ما وارد میکنیم دو حرف اول و دو حرف اخر ان را نشان میدهد و ما باید حدس بزنیم اگر درست حدس بزنیم میگوید شما برنده شدید  در غیر این صورت میگوید  شما باختید
?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <div>
        <label for="name">نام:</label>
        <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="fameli">نام خانوادگی:</label>
        <input type="text" name="fameli" id="fameli">
        </div>
        <div>
            <button type="submit">تولید نام کاربری</button>
        </div>
    </form>
    <?php
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $fameli=$_POST["fameli"];
   
    ?>
    <div>
        دو حرف اول کلمه  
        <?php
        echo  mb_substr($name , 0, 2);
        ?>
    </div>
    <div>
        دو حرف اخر کلمه
        <?php
        echo mb_substr($fameli,-2, 2);
    }
        ?>
    </div>
</body>
</html>
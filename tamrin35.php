<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  اگر نمره ای که وارد میکنیم بالای ده باشد بگوید قبول اگر کمتر از ده باشد بگوید رد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="number" name="nomreh" placeholder="نمره">
        <button type="submit">برسی</button>
    </form>
    <?php
     if (isset($_POST["nomreh"])){
     $nomreh=$_POST["nomreh"];
     if($nomreh >=0 && $nomreh <=20 ){
       if($nomreh >=10){
        echo "قبول";
       }
       else{
        echo "رد";
       }
     }
     }
    ?>
</body>
</html>
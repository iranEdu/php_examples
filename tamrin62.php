<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // یک کلمه را وارد میکنیم و کلمه یکی مانده به اخر را به ما نشان میدهد 
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="name">کلمه:</label>
        <input type="text" name="name" id="name">
        <button type="submit">ثبت</button>
    </form>
    <?php
    if(isset($_POST["name"])){
    $name=$_POST["name"];
    $name2= mb_strlen($name)/2;
    
    echo mb_substr($name,$name2,1);
    }
    ?>
    </div>
</body>
</html>
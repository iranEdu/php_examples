<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر ما کلمه را درست حدس زدیم میگوید حدس شما درست است درغیر این صورت میگویید حدس شما اشتباه است 
    ?>
</head>
<body dir="rtl">
    <strong>
    حروف کلمات
    <?php
    $name="ممد";
    echo mb_strlen($name);
    ?>
    است
    </strong>
    <form action="" method="post">
        <label for="hads">حدس شما:</label>
        <input type="text" name="hads" id="hads">
        <button type="submit">بررسی</button>
    </form> 
    <?php
    if(isset($_POST["hads"])){
    $hads=$_POST["hads"];
    $hads =trim($hads);
    if($name == $hads){
        echo"حدس شما درست است";
    }
    else{
        echo "حدس شما اشتباه است";
    }
    }
    ?>
</body>
</html>
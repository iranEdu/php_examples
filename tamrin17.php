<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  اگر متغیر تم دی باشد بگراند مشکی میشود در غیر این صورت بگراند سفید میشود
    ?>
    <style>
        .dark{
            background-color: black;
            color: white;
        }
        .light{
            background-color: white;
            color: black;
        }
    </style>
</head>
<?php
    $theme="d";
    if($theme == "d"){
        $dark='dark';
    }
    else{
        $dark='light';
    }
?>
<body dir="rtl" <?php echo "class=$dark"; ?>>
        <h1>پوسته پویا</h1>
        <div>
            نام:سید مهدی
        </div>
        <div>
            نام خانوادگی:رضوی
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //مربع رنگ را از پر رنگ میگیرد و از پررنگی ان هر بار کم میکند  
    ?>
</head>
<body dir="rtl">

    <?php
    for($i=1; $i<=1000; $i++){
       ?>
       <div style="display: inline-block; width: 25px; height: 25px; background-color: rgb(245, <?php echo $i; ?>, 245);"></div>
       <?php
    }
    ?>
</body>
</html>
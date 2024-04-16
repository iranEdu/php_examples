<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   تمام حروف کلمه را با رنگ های مختلف نشان میدهد
    ?>
    <style>
        .c1{
            color: palevioletred;
        }
        .c2{
            color: blue;
        }
        .c3{
            color: red;
        }
        .c4{
            color: green;
        }
        .c5{
            color: goldenrod;
        }
        .c6{
            color: rgb(250, 16, 133);
        }
        .c7{
            color: #ccc;
        }
        .c8{
            color: maroon;
        }
        .c9{
            color: royalblue;
        }
    </style>
</head>
<body>
<?php
$classes=array("c1","c2","c3","c4","c5","c6","c7","c8","c9");
$text="mamdgholy";
$i=0;
while ($i<9) {
    $name=$text[$i];
    $class=$classes[$i];
    echo "<span class='$class'>$name</span>";
    $i++;
}



?>
</body>
</html>
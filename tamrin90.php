<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //مقدار و قیمت هر محصول را جمع میکنیم و در اخر جمع همه محصولات را باهم جمع میکنیم  
    ?>
    <style>
        table{
            border: 2px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
        tr , td{
            border: 2px solid #ccc;
            border-collapse: collapse;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body dir=rtl>
<?php
    $names=array("برنج","چای","قهوه","مرغ");
    $mughdar=array(10,5,2,4);
    $gheymat=array(150000,50000,200000,100000);
    $sum=0;
    ?>
    <h1>فاکتور</h1>
    <table>
        <tr>
            <th>نام</th>
            <th>مقدار</th>
            <th>قیمت</th>
            <th>جمع</th>
        </tr>
        <tr>
            <?php
            for($i=0; $i<4; $i++){
            $sum=$mughdar[$i]*$gheymat[$i]+$sum;
                echo "<tr>";
                echo "<td>";
                echo  $names[$i];
                echo "</td>";
                echo "<td>";
                echo  $mughdar[$i];
                echo "</td>";
                echo "<td>";
                echo  $gheymat[$i];
                echo "</td>";
                echo "<td>";
                echo  $mughdar[$i]*$gheymat[$i];
                echo "</tr>";
            }
            ?>
    </table>
    <div>
        قیمت کل:
        <?php
        echo $sum ;
        ?>
    </div>
</body>
</html>
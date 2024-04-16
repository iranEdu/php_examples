<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر سه محصول را با قیمت انها در یک جدول با قیمت کل انها نشان میدهد
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
    </style>
</head>
<body dir="rtl">
<?php
    $name=array("برنج" , "چای" , "قهوه");
    $ghemat=array(250000,200000,100000);
    ?>
    <table>
        <tr>
            <td>نام کالا</td>
            <td>قیمت</td>
        </tr>
        <tr>
            <td>
                <?php
                echo $name[0];
                ?>
            </td>
            <td>
            <?php
            echo $ghemat[0];
            ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php
                echo $name[1];
                ?>
            </td>
            <td>
            <?php
            echo $ghemat[1];
            ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php
                echo $name[2];
                ?>
            </td>
            <td>
            <?php
            echo $ghemat[2];
            ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                قیمت نهایی
                <?php
                echo $ghemat[0] + $ghemat[1] + $ghemat[2];
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
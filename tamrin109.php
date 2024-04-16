<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   قیمت هر غذا را در جدول نشان میدهد
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
    $names=["قرمه سبزی"=>120000,"کشت زرد"=>100000,"کباب"=>150000,"کباب لقمه"=>200000];
    ?>
    <table>
    <?php
    foreach($names as $key => $value){
        ?>
            <tr>
                <td>
                <?php
                echo $key;
                ?>
                </td>
                <td>
                    <?php
                echo $value;
                    ?>
                </td>
            </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>
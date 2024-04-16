<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   نمره درس ها را باهم جمع میکند بعد تقسیم بر تعداد نمره ها میکند و معدل را بدست می اورد
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
    $sum=0;
    $grade=["ریاضی"=>18,"php"=>20,"وردپرس"=>20,"دینی"=>17];
    ?>
    <table>
        <tr>
            <td>نام درس</td>
            <td>نمره</td>
        </tr>
        <?php
        foreach ($grade as $key => $value) {
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
            $sum=$sum+$value;
            ?>
            <?php
        }
        ?>
        <tr>
            <td colspan=2>
                <?php
                echo $sum /count($grade);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
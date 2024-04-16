
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //نمره درس ها را گرفته و در 5 ضرب کرده و انها را بر 2 تقسیم کرده و معدل از 20 و 100 را بدست می اوریم
    ?>
    <style>
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
        tr,td{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
    </style>
</head>
<body dir="rtl">
    <?php
    $dars1=19;
    $dars_100=$dars1*5;
    /////////
    $dars2=20;
    $dars2_100=$dars2*5;
    ////////
    $kol_dars20=($dars1+$dars2)/2;

    ////////
    $kol_dars100=($dars_100+$dars2_100)/2;
    ?>
    <table>
        <tr>
            <td>درس</td>
            <td>نمره از 20</td>
            <td>نمره از 100</td>
        </tr>
        <tr>
            <td>وردپرس</td>
            <td><?php echo $dars1 ?></td>
            <td><?php echo $dars_100 ?></td>
        </tr>
        <tr>
            <td>php</td>
            <td><?php echo $dars2 ?></td>
            <td><?php echo $dars2_100 ?></td>
        </tr>
        <tr>
            <td colspan=3>
                معدل از 20:
                <?php echo $kol_dars20  ?>
            </td>
        </tr>
        <tr>
            <td colspan=3>
            معدل از 100:
            <?php echo $kol_dars100 ?>
            </td>
        </tr>
    </table>
</body>
</html>
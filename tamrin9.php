<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // متغیر گردو را در متغیر تعداد گردو ضرب میکند واز تخفیف کم میکند و کل ان را بدست می اورد 
    // متغیر بادام را در متغیر تعداد بادام ضرب میکند واز تخفیف کم میکند و کل ان را بدست می اورد 
    //قیمت  نهایی را بدست میاورد و از تخفیف کم میکند و همه را در جدول نشان میدهد
    ?>
    <style>
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
        tr{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        td{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        th{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
    </style>
</head>
<body dir="rtl">
    <?php
    $gherdo=180000;
    $tedad_gherdo=10;
    $kol2=$gherdo * $tedad_gherdo;
    $takhfif_gherdo=10000;
    $kol_gherdo=$gherdo*$tedad_gherdo-$takhfif_gherdo;
    //////////////////
    $badom=150000;
    $tedad_badom=6;
    $takhfif_badom=10000;
    $kol1=$badom * $tedad_badom;
    $kol_badom=$badom*$tedad_badom-$takhfif_badom;
    /////////////////
    $kol_fouktor=$kol1+$kol2;
    ////////////////
    $kol_takhfif=$takhfif_gherdo+$takhfif_badom;
    ///////////////
    $ghemat_nahayi=$kol_fouktor-$kol_takhfif;
    ?>
    <table>
        <th>
            <td>قیمت</td>
            <td>مقدار</td>
            <td>تخفیف</td>
            <td>قیمت کل</td>
        </th>
        <tr>
        <td>گردو</td>
        <td><?php echo $gherdo ?></td>
        <td><?php echo $tedad_gherdo ?></td>
        <td><?php echo $takhfif_gherdo ?></td>
        <td><?php echo $kol_gherdo ?></td>
        </tr>
        <tr>
        <td>بادام</td>
        <td><?php echo $badom ?></td>
        <td><?php echo $tedad_badom ?></td>
        <td><?php echo $takhfif_badom ?></td>
        <td><?php echo $kol_badom ?></td>
        </tr>
        <tr>
            <td colspan=5>
                مجموع کل:
                <?php echo $kol_fouktor ?>
            </td>
        </tr>
        <tr>
            <td colspan=5>
                تخفیف:
                <?php echo $kol_takhfif ?>
            </td>
        </tr>
        <tr>
            <td colspan=5>
                قیمت نهایی:
                <?php echo $ghemat_nahayi ?> 
            </td>
        </tr>
    </table>
</body>
</html>
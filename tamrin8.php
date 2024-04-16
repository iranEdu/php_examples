<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print"فاکتور" ?></title>
    <?php
    // متغیر برنج را در متغیر تعداد برنج ضرب میکند و کل ان را بدست می اورد 
    // متغیر زرشک را در متغیر تعداد زرشک ضرب میکند و کل ان را بدست می اورد
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
<body dir=rtl>
    <?php
    $berenj=185000;
    $tedad_berenj=7;
    $kol_berenj=$berenj * $tedad_berenj;
    ////////////////
    $zereshk=69000;
    $tedad_zereshk=5;
    $kol_zereshk=$zereshk * $tedad_zereshk;
    ///////////////
    $kol_fouktor=$kol_berenj + $kol_zereshk;
    ///////////////
    $takhfif=50000;
    //////////////
    $ghemat_nahayi=$kol_fouktor - $takhfif;
    


    ?>
    <div>
        <table>
            <th>
                <td>قیمت</td>
                <td>مقدار</td>
                <td>قیمت کل</td>
            </th>
            <tr>
            <td>برنج</td>
            <td><?php echo $berenj ?></td>
            <td><?php echo $tedad_berenj ?></td>
            <td><?php echo $kol_berenj ?></td>
            </tr>
            <tr>
                <td>زرشک</td>
                <td><?php echo $zereshk ?></td>
                <td><?php echo $tedad_zereshk ?></td>
                <td><?php echo $kol_zereshk ?></td>
            </tr>
            <tr>
                <td colspan="4">فاکتور کل:
                <?php echo $kol_fouktor ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    تخفیف:
                    <?php echo $takhfif ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    قیمت نهایی:
                    <?php echo $ghemat_nahayi ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  قیمت چای و برنج را باهم جمع میکنیم اگر برابر با پرداختی بود میگویید پرداخت شد در غیر این صورت میگویید پرداخت نشد
    ?>
    <style>
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
        tr , td{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body dir="rtl">
    <h1>فاکتور خرید</h1>
    <?php
    $nema_calah="چای";
    $gemat_calah=200000;
    //////////
    $nema_calah2="برنج";
    $gemat_calah2=650000;
    //////////////
    $gemat_col=$gemat_calah+$gemat_calah2;
    //////////////
    $mablagh_pardakht=$gemat_col;
    
    ?>
    <table>
        <tr>
            <td>نام کالا</td>
            <td>قیمت</td>
        </tr>
        <tr>
            <td><?php echo $nema_calah  ?></td>
            <td><?php echo $gemat_calah  ?></td>
        </tr>
        <tr>
            <td><?php echo $nema_calah2  ?></td>
            <td><?php echo $gemat_calah2  ?></td>
        </tr>
        <tr>
            <td colspan=2><?php echo $gemat_col  ?></td>
        </tr>
        <tr>
            <td colspan=2><?php echo $mablagh_pardakht  ?></td>
        </tr>
        <tr>
            <td colspan=2>
                <?php
                if($gemat_col==$mablagh_pardakht){
                    echo "پرداخت شد";
                }
                else{
                    echo "پرداخت نشده";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
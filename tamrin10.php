<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <?php
    //نمره درس را میگیرد و با هم جمع میکند ودر اخر ان را تقسیم بر تعداد درس ها میکند 
    ?>
    <style>
        table{
            border: 2px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
         td , tr{
            border: 2px solid #ccc;
            border-collapse: collapse;
        }
    </style>
</head>
<body dir=rtl>
    <?php
    $name_dars1="تولید و توسعه";
    $nomreh_dars1=20;
    ////////////////
    $name_dars2="آمادگی دفاعی";
    $nomreh_dars2=19;
    ///////////////
    $name_dars3="فارسی";
    $nomreh_dars3=18.5;
    //////////////
    $name_dars4="هویت";
    $nomreh_dars4=20;
    /////////////
    $moadel=$nomreh_dars1 + $nomreh_dars2 + $nomreh_dars3 + $nomreh_dars4;
    $kol_moadel=$moadel / 4;
    ?>
    <div>
        <table>
            <tr>
                <td>نام درس</td>
                <td>نمره</td>
            </tr>
            <tr>
                <td><?php echo $name_dars1 ?></td>
                <td><?php echo $nomreh_dars1 ?></td>
            </tr>
            <tr>
                <td><?php echo $name_dars2 ?></td>
                <td><?php echo $nomreh_dars2 ?></td>
            </tr>
            <tr>
                <td><?php echo $name_dars3 ?></td>
                <td><?php echo $nomreh_dars3 ?></td>
            </tr>
            <tr>
                <td><?php echo $name_dars4 ?></td>
                <td><?php echo $nomreh_dars4 ?></td>
            </tr>
            <tr>
                <td colspan="2">معدل
                <?php echo $kol_moadel ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
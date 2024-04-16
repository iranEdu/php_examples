<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نمرا ت هر دانش اموز را در جدول قرار میدهیم
    ?>
</head>
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
<body dir="rtl">
    <?php
    $names=array("نازنین" , "آنیتا" , "مریم" , "فاطی");
    $nomreh=array(17 , 20 , 19.5 , 10);
    ?>
    <table>
        <tr>
            <th>نام</th>
            <th>نمره</th>
        </tr>
        <?php
        for($i=0; $i<4; $i++){
            echo "<tr>
            <td>
            $names[$i]
            </td>
            <td>
            $nomreh[$i]
            </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
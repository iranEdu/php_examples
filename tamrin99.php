<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  هر محصول را با قیمت خودش در جدول قرار میدهد
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
<body dir="rtl">
    <?php
    $names=["نوتلا" , "برنج" , "چای" , "قهوه" , "آدامس"];
    $ghemat=[750000 , 100000 , 150000 , 600000 , 50000];
    ?>
    <table>
        <tr>
            <th>نام</th>
            <th>قیمت</th>
        </tr>
            <?php
            $i=0;
            while ($i<count($names)) {
                echo "<tr>";
                echo "<td>";
                echo  $names[$i];
                echo "</td>";
                echo "<td>";
                echo $ghemat[$i];
                echo "</td>";
                echo "</tr>";
                echo $i++;
            }
            ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   ضرب عدد یک تا ده را نشان میدهد در جدول
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
<body>
    <table>
    <?php
    $i=1;
    $j=1;
    while($i<=10){
        ?>
        <tr>
            <?php
        while($j<=10){
            ?>
                <td>
                    <?php
                    echo $i*$j;
                    $j++;
                    ?>
                </td>
                <?php
                }
                $i++;
                $j=1;
                ?>
        </tr>
        <?php
            }
                    ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نمره درس را  میگیریم اگر از ده کمتر بود با رنگ قرمز نشان میدهیم و اگر بالای ده بود با رنگ سبز نشان میدهیم و هر دو متغیر را باهم جمع میکنیم وتقسیم بر دو میکنیم ومعدل را بدست میاوریم
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
        .green{
            background-color: green;
        }
        .red{
            background-color: red;
        }
    </style>
</head>
<body dir="rtl">
    <?php
    $dars="php";
    $numreh=20;
    //////////
    $dars2="wordpress";
    $numreh2=9.99;
    /////////
    $moadl=($numreh+$numreh2)/2;
    ?>
    <table c>
        <tr>
            <td>نام درس</td>
            <td>نمره</td>
            <td>وضعیت</td>
        </tr>
        <tr>
            <td><?php echo $dars  ?></td>
            <td><?php echo $numreh  ?></td>
            <td 
            <?php
                if($numreh>=10){
                    echo "class='green'";
                }
                else{
                    echo "class='red'";
                }
                ?>
                >
            </td>
        </tr>
        <tr>
            <td><?php echo $dars2  ?></td>
            <td><?php echo $numreh2  ?></td>
            <td
            <?php
                if($numreh2>=10){
                    echo "class='green'";
                }
                else{
                    echo "class='red'";
                }
                ?>
                >
            
            </td>
        </tr>
        <tr>
            <td colspan=3>
                معدل:
                <?php echo $moadl ?></td>
        </tr>
    </table>
</body>
</html>
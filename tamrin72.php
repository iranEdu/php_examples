<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  هر درس را با نمره ان در جدول وارد میکند و نمره ها را باهم جمع میکند و تقسیم بر تعداد نمره ها میکند و معدل را نشان میدهد
    ?>
    <style>
        table{
            border:2px solid #ccc ;
            border-collapse: collapse;
            margin: auto;
        }
        tr , td{
            border:2px solid #ccc ;
            border-collapse: collapse; 
        }
    </style>
</head>
<body dir="rtl">
    <?php
    $name_dars=array("دینی" , "فارسی" , "عربی" , "سلامت بهداشت");
    $nomreh_dars=array(18 , 19 , 18 , 20);
  
    ?>
    <table>
        <tr>
            <td>
                 درس
            </td>
            <td>
                نمره
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $name_dars[0]; ?>
            </td>
            <td>
                <?php echo $nomreh_dars[0]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $name_dars[1]; ?>
            </td>
            <td>
            <?php echo $nomreh_dars[1]; ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $name_dars[2]; ?>
            </td>
            <td>
            <?php echo $nomreh_dars[2]; ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php echo $name_dars[3]; ?>
            </td>
            <td>
            <?php echo $nomreh_dars[3]; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">معدل:
                <?php echo ($nomreh_dars[0] + $nomreh_dars[1] +  $nomreh_dars[2] +$nomreh_dars[3]) / 4 ?>
            </td>
        </tr>
    </table>
</body>
</html>
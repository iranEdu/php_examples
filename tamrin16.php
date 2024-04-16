-+++++++<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نمره درس را میگیرد اگر بالای ده باشد میگوید قبول با رنگ سبز اگر کمتر از ده بود میگویید رد با رنگ قرمز
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
        .a{
            color: chartreuse;
        }
        .s{
            color: red;
        }
    </style>
</head>
<body dir=rtl>
    <div>
        <div>
            <?php
            $dars="ریاضی";
            $nomreh=17;
            ///////////
            $dars2="فارسی";
            $nomreh2=19;
            ////////////
            $dars3="ورزش";
            $nomreh3=6;
            ?>
        </div>
        <table>
            <tr>
                <td>درس</td>
                <td>نمره</td>
                <td>وضعیت</td>
            </tr>
            <tr>
                <td><?php echo $dars  ?></td>
                <td><?php echo $nomreh  ?></td>
                <td><?php if($nomreh>=10){
                    echo '<span class=a>';
                    echo"قبول";
                    echo'</span>';} 
                    else{echo '<span class=s>';
                        echo"رد";
                        echo'</span>';}?>
                    </td>
            </tr>
            <tr>
                <td><?php echo $dars2  ?></td>
                <td><?php echo $nomreh2  ?></td>
                <td><?php  if($nomreh2>=10){
                    echo '<span class=a>';
                    echo"قبول";
                    echo'</span>';}
                    else{
                        echo '<span class=s>';
                        echo"رد";
                        echo'</span>';}?>
            </td>
            </tr>
            <tr>
                <td><?php echo $dars3  ?></td>
                <td><?php echo $nomreh3  ?></td>
                <td><?php if($nomreh3>=10){
                     echo '<span class=a>';
                     echo"قبول";
                     echo'</span>';}
                    else{echo '<span class=s>';
                        echo"رد";
                        echo'</span>';}?>
            </td>
            </tr>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  دو عدد را وارد میکنیم و مسئله دلخواه را انتخاب میکنیم و ان را انجام میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <input type="text" name="num1">
        <select name="amalgar" id="">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>**</option>
            <option>mmm</option>
        </select>
        <input type="text" name="num2">
        <button type="submit">محاسبه</button>
    </form>
    <?php
    if(isset($_POST["num1"])){
        $num1=$_POST["num1"];
        $amalgar=$_POST["amalgar"];
        $num2=$_POST["num2"];
        switch ($amalgar) {
            case '+':
                echo $num1 + $num2;
                break;
            case '-':
                echo $num1 - $num2;
                break;
            case '*':
                echo $num1 * $num2;
                break;
            case '/':
                echo $num1 / $num2;
                break;
            case '**':
                echo $num1 ** $num2;
                break;
            case 'mmm':
                $hasel= $num1 / $num2;
                echo $hasel - intval($hasel);
                break;
            
            default:
                # code...
                break;
        }
    }
    ?>
</body>
</html>
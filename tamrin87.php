<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //به عدد اول دو تا دوتا اضافه میشود تا به عدد دوم برسد  
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
    <div>
        <label for="num1">عدد اول</label>
        <input type="number" name="num1" id="num1">
    </div>
    <div>
        <label for="num2">عدد دوم</label>
        <input type="number" name="num2" id="num2">
    </div>
    <div>
        <button type="submit">بررسی</button>
    </div>
    </form>
    <?php
    if(isset($_POST["num1"])){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        for($i = $num1; $i <= $num2; $i++){
            if($i % 2==0){
                echo $i;
                echo "<br/>";
            }
        }
    }
    ?>
</body>
</html>
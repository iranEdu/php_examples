<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   یک رقمی و دو رقمی و .... را نشان میدهد
    ?>
</head>
<body dir=rtl>
    <form action="" method="post">
        <label for="number">عدد</label>
        <input type="number" name="number" id="number">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["number"])){
        $x=$_POST["number"];
    $c=0;
    do{
    $c ++;
    $x=$x/10;
    }while($x>=1);
    echo $c ;
}
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //یک کلمه وارد میکنیم بعد میگوییم از حرف چند تا چند را برای من جدا کن 
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
       <div>
        <label for="harf">متن</label>
        <input type="text" name="harf">
       </div>
       <div>
        <label for="az">از حرف</label>
        <input type="text" name="az">
       </div>
       <div>
        <label for="ta">تا چند حرف</label>
        <input type="text" name="ta">
       </div>
       <div>
        <button type="submit">جدا کن</button>
       </div>
    </form>
    <?php
    if(isset($_POST["harf"])){
    $harf=$_POST["harf"];
    $az=$_POST["az"];
    $ta=$_POST["ta"];
    echo mb_substr($harf , $az ,$ta);
    }
    ?>
</body>
</html>
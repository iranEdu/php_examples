<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  نام هر غذا را که وارد کنیم قیمت ان را به ما نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="ghaza">نام غذا</label>
        <select name="ghaza" id="ghaza">
            <option>برگر</option>
            <option>خوراک</option>
            <option>زبون</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["ghaza"])){
        $ghaza=$_POST["ghaza"];
        $name=array("برگر" , "خوراک" , "زبون");
        $ghemat=array(70000 , 50000 , 120000);
        if(in_array( $ghaza, $name)){
        $kol=array_search($ghaza , $name);
        echo $ghemat[$kol];
        }
    }

    ?>
</body>
</html>
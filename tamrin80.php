<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //  روز و ماه و سال را انتخاب میکنیم
    ?>
</head>
<body dir=rtl>
    <div>
        <label for="i">روز</label>
        <select id="i">
            <?php
            for($i=1;$i<=31;$i++){
                echo "<option>$i</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="a">ماه</label>
        <select id="a">
            <?php
            for($a=1;$a<=12;$a++){
                echo "<option>$a</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="m">سال</label>
        <select id="m">
            <?php
            for($m=1340;$m<=1402;$m++){
                echo "<option>$m</option>";
            }
            ?>
        </select>
    </div>
</body>
</html>
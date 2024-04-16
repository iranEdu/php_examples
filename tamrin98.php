<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   از یک تا 31 را نشان میدهد
    ?>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="a">روز</label>
        <select name="" id="a">
            <?php
            $i=1;
            while ($i<=31) {
                echo "<option>$i</option>";
                $i++;
            }
            ?>
        </select>
    </form>
</body>
</html>
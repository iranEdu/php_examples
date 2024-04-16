<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   نام هر ماشین را که وارد میکنیم عکس و مشخصات ان را نشان میدهد
    ?>
    <style>
        table{
            border: 2px solid #ccc;
            border-collapse: collapse;
            margin: auto;
        }
        tr , td{
            border: 2px solid #ccc;
            border-collapse: collapse;
        }
    </style>
</head>
<body dir="rtl">
    <form action="" method="post">
        <label for="names">نام ماشین</label>
        <input type="text" name="names" id="names">
        <button type="submit">بررسی</button>
    </form>
    <?php
    if(isset($_POST["names"])){
        $names=$_POST["names"];
        $cars=[
            "نیسانgtr"=>["img"=>"images/1.jpg"],"قدرت"=>600,"سیلندر"=>6,"حجم موتور"=>3600,"قیمت"=>5000000000,
            "سوپرا"=>["img"=>"images/1.jpg"],"قدرت"=>550,"سیلندر"=>5,"حجم موتور"=>3000,"قیمت"=>3000000000]
        ;
        ?>
        <table>
            <tr>
               <td colspan=2>
                <?php
                echo $names;
                ?>
               </td>
            </tr>
            <?php
            foreach ($cars[$names] as $key => $value) {
                if($key=="img"){
                    ?>
                    <img src="<?php echo $value ?>" alt="">
                    <?php
                }
                else{
                ?>
                    <tr>
                    <td>
                        <?php
                        echo $key;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $value;
                        ?>
                    </td>
                </tr>
                <?php
                }
                ?>
                
                <?php
            }
            ?>
    
        </table>
        <?php
    }
    ?>
</body>
</html>
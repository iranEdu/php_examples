<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //   نام هر دانش اموز را که وارد کنیم تمام نمرات و معدل او بالا می اید
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
        <label for="names">نام دانش آموز</label>
        <select name="names" id="names">
            <option>سید مهدی رضوی</option>
            <option>محمد امین نوایی</option>
            <option>علی بشگزی</option>
        </select>
        <button type="submit">بررسی</button>
    </form>
    <?php
        if(isset($_POST["names"])){
        $names=$_POST["names"];
        $sum=0;
        $grade=[
            "سید مهدی رضوی"=>["ادبیات"=>17,"php"=>19,"wordpress"=>18],
            "محمد امین نوایی"=>["ادبیات"=>12,"php"=>8,"wordpress"=>10],
            "علی بشگزی"=>["ادبیات"=>18,"php"=>15,"wordpress"=>17]
        ];
        ?>
        <table>
            <tr>
                <td>نام درس</td>
                <td>نمره</td>
            </tr>
            <?php
            foreach ($grade[$names] as $key => $value) {
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
                $sum+=$value;
            }
            ?>
            <tr>
                <td>معدل</td>
                <td>
                    <?php
                    echo $sum/count($grade[$names]);
                    ?>
                </td>
            </tr>
        </table>
        <?php
        }
        ?>
</body>
</html>
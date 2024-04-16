<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
// اگر رمز هر نام کاربری را درست وارد کنیم میگوید وارد شدید درغیر این صورت میگوید اشتباه است
?>
</head>
<body dir="rtl">
    <form action=""  method="post">
        <label for="name1">نام کاربری:</label>
        <select name="name1" id="">
            <option>user1</option>
            <option>user2</option>
     </select>
        <label for="ramz">رمز عبور:</label>
        <input type="text" name="ramz">
        <button type="submit">ورود</button>
    </form>
    <?php
    if (isset($_POST["name1"])) {
        $name1=$_POST["name1"];
        $ramz=$_POST["ramz"];
        switch ($name1) {
            case 'user1':
                if($ramz == "pass1"){
                    echo "وارد شدید";
                }
                else {
                    echo "اشتباه است";
                }
                case 'user2':
                    if($ramz == "pass2"){
                        echo "وارد شدید";
                    }
                    else {
                        echo "اشتباه است";
                    }
                break;
            
            default:
                # code...
                break;
        }
    }
   
    ?>
</body>
</html>
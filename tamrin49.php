<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
//کلمه که ما وارد میکنیم حرف اول و اخر ان را نشان میدهد و ما باید حدس بزنیم اگر درست حدس بزنیم میگوید شما برنده شدید  در غیر این صورت میگوید  شما باختید
?>
</head>
<body dir="rtl">
<form action="" method="post">
    <label for="word">کلمه مورد نظر را وارد کنید</label>
    <input type="text" name="word" id="word">
    <button type="submit">ثبت</button>
</form>
    <?php
    $word="";
    if(isset($_POST["word"])){
        $word=$_POST["word"];
    }
    ?>
    <div>
        تعداد حروف کلمه
        <?php
        echo mb_strlen($word);
        ?>
    </div>
    <div>
        حرف اول کلمه
        <?php
    echo mb_substr($word,0,1);
        ?>
    </div>
    <div>
        حرف اخر کلمه
        <?php
        echo mb_substr($word,-1,1);
        ?>
    </div>
    <div>
        <form action="" method="post">
            <label for="hads">حدس شما</label>
            <input type="text" name="hads" id="hads">
            <input type="hidden" name="copy" value="<?php echo $word ?>">
            <button type="submit">ثبت</button>
        </form>
        <?php
        if(isset($_POST["hads"])){
            $hads=$_POST["hads"];
            $copy=$_POST["copy"];
            if($hads == $copy){
                echo "شما برنده شدید";
            }
            else {
                echo "شما باختید";
            }
        }
        ?>
    </div>
</body>
</html>
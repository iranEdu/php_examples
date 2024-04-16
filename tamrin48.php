<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
//کلمه که ما وارد میکنیم حرف اول و اخر ان را نشان میدهد و ما باید حدس بزنیم اگر درست حدس بزنیم میگوید درست است در غیر این صورت میگوید نادرست است
?>
<body dir="rtl">
    <form action="" method="post">
    <label for="harf">کلمه مورد نظر</label>
    <input type="text" name="harf">
    <button type="submit">بررسی</button>
    </form>
    <?php
    $harf="";
    if(isset($_POST["harf"])){
    $harf=$_POST["harf"];
    }
    ?>
    <div>
        کلمه مورد نظر 
        <?php
    echo mb_strlen($harf);
        ?>
        است
    </div>
    <div>
        حرف اول کلمه شما
        <?php
        echo mb_substr($harf , 0 , 1 );
        ?>
        _ _ _ _ _ _ _   
        <?php
        echo mb_substr($harf , -1 , 1 );
        ?>
    </div>
    <div>
    <form action="" method="post">
        <label for="word">کلمه مورد نظر</label>
        <input type="text" name="word" id="word">
        <button type="submit">بررسی</button>
        <input type="hidden" name="copy" value='<?php echo $harf; ?>'>
    </form>
    </div>
    <?php
    if(isset($_POST["copy"])){
        $copy=$_POST["copy"];
        $word=$_POST["word"];
        if($copy == $word){
            echo "درست است";
        }
        else{
            echo "نادرست است";
        }
    }
    ?>
</body>
</html>
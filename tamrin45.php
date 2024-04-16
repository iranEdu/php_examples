<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر دکمه مشکی را وارد کنیم بگراند مشکی میشود واگر سفید را وارد کنیم بگراند سفید میشود
    ?>
    <style>
        .dark{
            background-color: black;
            color: white;
        }
        .light{
            background-color: white;
            color: black;
        }
    </style>
</head>

<body dir="rtl"  <?php 
if(isset($_POST["theme"])){
$theme=$_POST["theme"];
switch ($theme) {
    case 'dark':
        echo  "class='dark'";
        break;
        case 'light':
            echo  "class='light'";
            break;
    default:
        # code...
        break;
}  }?>>
    <form action="" method="post">
        <select name="theme" id="">
        <option>dark</option>
        <option>light</option>
        </select>
        <button type="submit">ثبت</button>
    </form>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    // اگر از منوی انتخاب غذا غذای اصلی و نوشیدنی و پیش غذا را انتخاب کنیم قیمت انها را جمع میکند و نشان میدهد
    ?>
</head>
<body dir="rtl">
    <h1>منوی انخاب غذا</h1>
    <div>
        <form action="" method="post">
            ;<label for="ghaza">غذای اصلی</label>
         <select name="ghaza" id="ghaza">
            <option>قیمه </option>
            <option>چلو مرغ</option>
            <option>کباب</option>
         </select>
    </div>
    <div>
            <label for="noshedane">نوشیدنی</label>
            <select name="noshedane" id="noshedane">
               <option>دوغ</option>
               <option>نوشابه</option>
               <option>ماالشعیر</option>
            </select>
    </div>
    <div>
            <label for="pish_ghaza">پیش غذا</label>
            <select name="pish_ghaza" id="pish_ghaza">
               <option>ژله</option>
               <option>سالاد</option>
               <option>بستنی</option>
            </select>
            </div>
            <div>
                <button type="submit">بررسی</button>
            </div>
           </form>
       <?php
       $gemat_kol=0;
       if(isset($_POST["ghaza"])){
        $ghaza=$_POST["ghaza"];
        $noshedane=$_POST["noshedane"];
        $pish_ghaza=$_POST["pish_ghaza"];
        ?>
        <div>
        <?php
        switch ($ghaza) {
            case 'قیمه':
                $gemat_kol=$gemat_kol+100000;
                echo "غذای اصلی قیمه";
                break;
            case 'چلو مرغ':
                $gemat_kol=$gemat_kol+110000;
                echo "غذای اصلی چلو مرغ";
                break;
            case 'کباب':
                $gemat_kol=$gemat_kol+90000;
                echo "غذای اصلی کباب";
                break;
            default:
                # code...
                break;
        }
        ?>
        </div>
        <div>
        <?php
        switch ($noshedane) {
            case 'دوغ':
                $gemat_kol=$gemat_kol+15000;
                echo "نوشیدنی دوغ";
                break;
            case 'نوشابه':
                $gemat_kol=$gemat_kol+25000;
                    echo "نوشیدنی نوشابه";
                    break;
                    case 'ماالشعیر':
                        $gemat_kol=$gemat_kol+20000;
                        echo "نوشیدنی ماالشعیر ";
                        break;
            default:
                # code...
                break;
        }
        ?>
        </div>
        <div>
        <?php
        switch ($pish_ghaza) {
            case 'ژله':
                $gemat_kol=$gemat_kol+10000;
                echo " پیش غذا ژله";
                break;
                case 'سالاد':
                    $gemat_kol=$gemat_kol+20000;
                    echo "پیش غذا سالاد";
                    break;
                case 'بستنی':
                        $gemat_kol=$gemat_kol+10000;
                        echo "پیش غذا بستنی";
                        break;
            default:
                # code...
                break;
        }
        ?>
        </div>
        <?php
    }
       ?>
       <div>
        <?php
        echo "قیمت کل $gemat_kol";
        ?>
       </div>
    
</body>
</html>
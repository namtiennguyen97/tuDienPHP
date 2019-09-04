<!doctype html>
<html lang="en">
<head>
    <title>Translation</title>
    <style>
        input[type=text]{
            width: 300px;
            font-size: 16px;
            border: 2px solid #cccccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding : 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Tu dien ANH-VIET</h2>
<form method="post">
    <input type="text" name="text" placeholder="Input text here!"/>
    <input type="submit" id="submit" value="Search">
</form>
<?php
// tao mang chua
$dictionary = ['hello'=>'xin chao', 'sword'=>'kiem','hammer'=>'bua','sheild'=>'khien','bow'=>'cung','spear'=>'giao','staff'=>'quyen truong','knife'=>'dao gam'];
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $searching = $_POST['text'];
   $flag =0;
    foreach ($dictionary as $word => $description){ //word la phan tu de duyet
        if ($word == $searching){
            echo 'Tu:'.$word.'<br/>Nghia cua tu:'. $description;
            echo "<br/>";
            $flag =1; // true
        }
    }
    if ($flag == 0){
        echo "Khong tim thay tu can tra";
    }
}
?>
</body>
</html>
















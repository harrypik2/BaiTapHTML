<?php
// Kiểm tra 1 biến có tồn tại isset
if(!isset($_POST['user']) or !isset($_POST['pass']) ){
    die("Phải nhập nội dung từ index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #khung{
            height: 280px;
            width: 300;
            border: 1px solid black;
            position: relative;
            margin: auto;
        }
        #b{
            color: red; 
            position: absolute;
            bottom: 3px;
            left: 35px;
        }
        #h{
            position: absolute;
            top: 80px;
            left: 83px;

        }
    </style>
</head>

<body>
    <div id="khung">
        <h2 id="h">WELCOME</h2>
        <div id="b">Đăng nhập thành công lúc <span><?php date_default_timezone_set('Asia/Ho_Chi_Minh'); 
    $t = date("H:i:s");
    echo $t;?></span></div>
    </div>
</body>

</html>
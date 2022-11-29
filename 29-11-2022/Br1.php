<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
?>

<!DOCTYPE html>
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
            margin: auto;
            text-align: center;
        }
        h2{
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div id="khung">
        <h2>WELCOME</h2>
        <div style="color: red; vertical-align: bottom;">Đăng nhập thành công lúc <p id="time"></p></div>
    </div>
</body>

</html>
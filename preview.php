<?php
session_start();
// print_r($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vCard產生器</title>
    <!-- reset -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- preview -->
    <link rel="stylesheet" href="css/preview.css">
    <!-- layout01 -->
    <link rel="stylesheet" href="<?=$_SESSION['css']?>">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main movebg">
        <div class="bgtext">Vcard</div>
        <div class="design">
            <div class="p_photo" style="background:url('file_img/<?= $_SESSION['photo'] ?>');background-size: cover;background-repeat: no-repeat;background-position-x: center;"></div>
            <div class="p_name_job">
                <p><?= $_SESSION['job'] ?></p>
                <p><?= $_SESSION['name'] ?></p>
            </div>
            <div class="p_email_phone">
                <p><span>email</span><?= $_SESSION['email'] ?></p>
                <p><span>phone</span><?= $_SESSION['phone'] ?></p>
            </div>
            <hr>
            <div class="p_info">
                <p>info</p>
                <p></p><?= $_SESSION['info'] ?></p>
            </div>
            <button onclick="window.history.go(-1)">回頁面</button>
        </div>
    </div>
</body>

</html>
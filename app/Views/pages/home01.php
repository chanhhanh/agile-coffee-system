<?php
    $sessionData = [
        'id',
        'username',
        'email',
        'isLoggedIn',
    ];
    session()->remove($sessionData);
    // header("Refresh:0; url=home.php");
?>


    <h1 style="text-align: center; color : red; padding-top: 50px;">Bạn đã đổi thông tin thành công, vui lòng load lại trang và đăng nhập lại</h1>
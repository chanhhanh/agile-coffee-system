<?php
    $sessionData = [
        'id',
        'username',
        'email',
        'isLoggedIn',
    ];
    session()->remove($sessionData);
    header("Refresh:0; url=home.php");
?>
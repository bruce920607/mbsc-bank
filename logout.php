<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

//session清空
echo '<script>alert("確認要登出您的帳號?"); location.href = "index.php";</script>';
session_unset($_SESSION['email']);
echo '登出中......';

?>
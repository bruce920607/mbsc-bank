<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//連接資料庫
include("config.php");

$name= $_POST['name'];
$email = $_POST['email'];
$pw = $_POST['password'];

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$sql1 = "SELECT * FROM mbscndet_users WHERE email = '$email'";
$result1 = mysqli_query($con, $sql1);
$r1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM mbscndet_users WHERE user = '$name'";
$result2 = mysqli_query($con, $sql2);
$r2 = mysqli_num_rows($result2);


if($r2 > 0 || $r1 > 0){
	echo "<script>alert('此名字或Email已被使用!'); location.href = 'register.php';</script>";
}else{
	//新增資料
	$add = "INSERT INTO mbscndet_users (userid, user, email, password, M_money, C_money) values (NULL, '$name', '$email', '$pw', '0', '0')";
	mysqli_query($con, $add);
	echo "<script>alert('帳號註冊成功!請重新登入!'); location.href = 'index.php';</script>";
}
?>
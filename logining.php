<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//連接資料庫
include("config.php");

$email = $_POST['email'];
$pw = $_POST['password'];

//搜尋資料庫資料
$sql = "SELECT * FROM mbscndet_users WHERE email = '$email'";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($result);


//判斷帳號
if($row[2] == $email && $row[3] == $pw){
	//帳號寫入session，驗證使用者身份
	$_SESSION['email'] = $email;
	if(isset($_SESSION['email'])){
		echo "<script>alert('登入成功!現在將為您進行轉跳');</script>";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=bank.php>';
	}else{
		echo "SESSION寫入失敗!";
	}
}else{
	echo "<script>alert('Email或密碼輸入錯誤!'); location.href = 'index.php';</script>";
}


?>
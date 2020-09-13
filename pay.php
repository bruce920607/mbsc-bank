<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
//連接資料庫
include("config.php");

$email = $_SESSION['email'];
$name = $_POST['username'];
$money = $_POST['money'];
$pw = $_POST['password'];
$cur = $_POST['currency'];

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//搜尋資料庫資料
$sql1 = "SELECT * FROM mbscndet_users WHERE email = '$email'";
$result1 = mysqli_query($con, $sql1);
$r1 = mysqli_fetch_row($result1);

$sql2 = "SELECT * FROM mbscndet_users WHERE user = '$name'";
$result2 = mysqli_query($con, $sql2);
$r2 = mysqli_fetch_row($result2);

if($pw == $r1[3]){
	if($name == $r2[1]){
		if($cur == "M"){
			if($money <= $r1[4]){
				if($money <= 0){
					echo "<script>alert('匯款金額輸入數值錯誤'); location.href = 'bank.php';</script>";
				}else{
					$payment1 = $r1[4] - $money;
					$payment2 = $r2[4] + $money;
					$pay1 = "UPDATE mbscndet_users SET M_money = '$payment1' WHERE email = '$email'";
					$pay2 = "UPDATE mbscndet_users SET M_money = '$payment2' WHERE user = '$name'";
					mysqli_query($con, $pay1) or die('MySQL修改錯誤');
					mysqli_query($con, $pay2) or die('MySQL修改錯誤');
					echo "<script>alert('付款成功'); location.href = 'bank.php';</script>";
				}
			}else{
				echo "<script>alert('你的馬幣金額不足'); location.href = 'bank.php';</script>";
			}
		}elseif($cur == "C"){
			if($money <= $r1[5]){
				if($money <= 0){
					echo "<script>alert('匯款金額輸入數值錯誤'); location.href = 'bank.php';</script>";
				}else{
					$payment1 = $r1[5] - $money;
					$payment2 = $r2[5] + $money;
					$pay1 = "UPDATE mbscndet_users SET C_money = '$payment1' WHERE email = '$email'";
					$pay2 = "UPDATE mbscndet_users SET C_money = '$payment2' WHERE user = '$name'";
					mysqli_query($con, $pay1) or die('MySQL修改錯誤');
					mysqli_query($con, $pay2) or die('MySQL修改錯誤');
					echo "<script>alert('付款成功'); location.href = 'bank.php';</script>";
				}
			}else{
				echo "<script>alert('你的燦幣金額不足'); location.href = 'bank.php';</script>";
			}
		}else{
			echo "貨幣選項錯誤";
		}
	}else{
		echo "<script>alert('查無此對象，請確認名字是否有打對!!'); location.href = 'bank.php';</script>";
	}
}else{
	echo "<script>alert('密碼輸入錯誤!'); location.href = 'bank.php';</script>";
}


?>
<!DOCTYPE html>
<!--
本網站模板取自於Quixlab開源(https://themefisher.com/products/quixlab-admin-dashboard-theme/)
由MeaBlue Chang(張元璞)修改及製作
網站代碼已開源，不得用於非法之商業活動
-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>馬援會銀行系統－註冊</title>
	<link href="css/style.css" rel="stylesheet">
	
<style>
#myDiv {
display: none;
text-align: center;
}
</style>
</head>

<body class="h-100" onload="myFunction()">
<div class="h-100" style="display:none;" id="myDiv" >
	<div class="login-form-bg h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100">
				<div class="col-xl-6">
					<div class="form-input-content">
						<div class="card login-form mb-0">
							<div class="card-body pt-5">
								<a class="text-center"><h4>註冊帳號</h4></a>
									<form action="registering.php" method="post">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="名字" required>
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="密碼" required>
								</div>
								<button class="btn login-form__btn submit w-100">註冊</button>
									</form>
								<p class="mt-5 login-form__footer">已有帳號了? <a href="index.php" class="text-primary">進行登入 </a></p>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 10);
}

function showPage() {;
  document.getElementById("myDiv").style.display = "block";
}
</script>
	
</body>
</html>






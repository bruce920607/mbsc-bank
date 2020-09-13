<html>
<!--
本網站模板取自於Quixlab開源(https://themefisher.com/products/quixlab-admin-dashboard-theme/)
由MeaBlue Chang(張元璞)修改及製作
網站代碼已開源，不得用於非法之商業活動
-->
<?php
session_start();
include('config.php');
$email = $_SESSION['email'];
$sql = "SELECT * FROM mbscndet_users WHERE email = '$email'";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($result);	
?>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> 馬援會銀行系統 </title>

<!-- Pignose Calender-->
<link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
<link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
<!-- Custom Stylesheet -->
<link href="css/style.css" rel="stylesheet">

</head>

<body>

<!--Header start-->
<div id="main-wrapper">

<div class="header"> 
	<div class="header-content clearfix">
		<div class="nav-control">
					<div class="hamburger">
						<span class="toggle-icon"><i class="icon-menu"><img src="images/menu_icon.png" height="30" width="30"></i></span>
					</div>
				</div>
		<div class="header-right">
			<ul class="clearfix">
				<li class="icons dropdown d-none d-md-flex">
					<a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
					<span>中文</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
					</a>
					<div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
						<div class="dropdown-content-body">
							<ul>
								<li><a href="javascript:void()">中文</a></li>
								<li><a href="javascript:void()">English</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="icons dropdown">
					<div class="user-img c-pointer position-relative"   data-toggle="dropdown">
						<img src="images/user_icon.png" height="40" width="40" alt="">
					</div>
				
					<div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
						<div class="dropdown-content-body">
							<ul>
								<li>
									<span style="font-weight:bold;"><?php echo $row[1]; ?></span>
								</li>
								<li>
									<a href="bank.php"><span>資料</span></a>
								</li>
								<hr class="my-2">
								<li>
									<a href="logout.php"><span>登出</span></a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--Header end-->


<div class="nk-sidebar">   
	<div class="nk-nav-scroll">
		<ul class="metismenu" id="menu">
			<li class="nav-label"><h3>選單</h2></li>
			<li>
				<a class="has-arrow" href="javascript:void()" aria-expanded="false">
  		  			<i class="icon-speedometer menu-icon"></i><span class="nav-text">我的</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="bank.php">主頁</a></li>
   				</ul>
			</li>
		</ul>
	</div>
</div>


<div class="content-body">
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="card gradient-1">
					<div class="card-body">
						<h3 class="card-title text-white">馬幣</h3>
						<div class="d-inline-block">
							<h2 class="text-white">$ <?php echo $row[4];?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="card gradient-2">
					<div class="card-body">
						<h3 class="card-title text-white">燦幣</h3>
						<div class="d-inline-block">
							<h2 class="text-white">$ <?php echo $row[5];?></h2>
						</div>
						<span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-md-12">
				<form action="pay.php" method="post">
					<div>
						<h4>金融支付</h4>
						<section>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="對方名字" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="number" name="money" class="form-control" placeholder="金額" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="密碼" required>
									</div>
								</div>
								<div class="col-lg-6">
									<select name="currency" style="width:300;height:40;">
										<option value="M">馬幣</option>
										<option value="C">燦幣</option>
									</select>
								</div>
								<button class="btn login-form__btn submit w-100 h-100">確定支付</button>
							</div>
						</section>
					</div>
				</form>
			</div>
		</div>
	</div>
			
</div>

</div>


<!--Scripts-->

<script src="plugins/common/common.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/settings.js"></script>
<script src="js/gleek.js"></script>
<script src="js/styleSwitcher.js"></script>
<!-- Chartjs -->
<script src="./plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="./plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="./plugins/d3v3/index.js"></script>
<script src="./plugins/topojson/topojson.min.js"></script>
<script src="./plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="./plugins/raphael/raphael.min.js"></script>
<script src="./plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="./plugins/moment/moment.min.js"></script>
<script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="./plugins/chartist/js/chartist.min.js"></script>
<script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

<script src="./js/dashboard/dashboard-1.js"></script>

</body>
</html>

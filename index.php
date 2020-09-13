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
    <title>馬援會銀行系統－登入</title>
    <link href="css/style.css" rel="stylesheet">
	
<style>
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid blue;
  border-right: 10px solid green;
  border-bottom: 10px solid red;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" 
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}*/

#myDiv {
  display: none;
  text-align: center;
}
</style>

</head>


<body class="h-100" onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div class="h-100" style="display:none;" id="myDiv" >
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center"> <h4>登入帳號</h4></a>
                                <form action="logining.php" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="密碼" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">登入</button>
                                </form>
                                <p class="mt-5 login-form__footer">尚未創建帳號?  <a href="register.php" class="text-primary">馬上註冊</a></p>
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
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>






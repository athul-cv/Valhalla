<?php
include("../Assets/Connection/Connection.php");
session_start();

if(isset($_POST['btn_submit']))
{


	$E_mail=$_POST['txt_email'];
	$password=$_POST['txt_password'];
	
	
	$seluser="select * from tbl_user where user_email= '".$E_mail."' and user_password='".$password."'";
	$result1=$conn->query($seluser);
	
	$seladmin="select * from tbl_admin where admin_email= '".$E_mail."' and admin_password='".$password."'";
	$result2=$conn->query($seladmin);
	
	$seldriver="select * from tbl_driver where driver_email= '".$E_mail."' and driver_password='".$password."'";
	$result3=$conn->query($seldriver);
	
	
	if($result1->num_rows>0)
	{ 
			$row=$result1->fetch_assoc();
			$_SESSION['uid']=$row['user_id'] ;
			?>
				<script>
					window.location="../User/HomePage.php";
				</script>
			<?php
		
	}
	 else if($result2->num_rows>0)
	{ 
			$row1=$result2->fetch_assoc();
			$_SESSION['aid']=$row1['admin_id'] ;
			?>
				<script>
					window.location="../Admin/HomePage.php";
				</script>
			<?php
		
	}
 else if($result3->num_rows>0)
	{ 
			$row2=$result3->fetch_assoc();
			$_SESSION['did']=$row2['driver_id'] ;
			header('location:../Driver/HomePage.php');
		
	}
else 
{
	echo"\ninvalid";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Assets/Template/Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Assets/Template/Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../Assets/Template/Login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="txt_email" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="txt_password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="btn_submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/bootstrap/js/popper.js"></script>
	<script src="../Assets/Template/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Assets/Template/Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Assets/Template/Login/js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php
  $dbhost = '127.0.0.1';
  $dbuser = 'sususu';
  $dbpass = 'd03181214';
  $dbname = 'sususu';
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass) or die('Error with MySQL connection');
  $_SESSION['conn'] = $conn;
  mysqli_query($conn, "SET NAMES 'utf8'");
  mysqli_select_db($conn, $dbname);
  session_start();  // 啟用交談期
  // $sql = "SELECT C_name, C_id FROM customer where account = '{$_SESSION[ "username" ]}' and password = '{$_SESSION[ "password" ]}';";
  // $result = mysqli_query($conn, $sql) or die('MySQL query error');
  // $row = mysqli_fetch_array($result);
  
		
?>
<head>
	<title>signup V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="signup.php" method="post">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					<div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="fname">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>

					<div class="wrap-input100 validate-input" >
					<input class="input100" type="text" name="lname">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					</div>
					<div class="wrap-input100 validate-input" >
						<input pattern="[0-9]{10}" title="##########" class="input100" type="text" name="phone" >
						<span class="focus-input100" data-placeholder="Phone Number"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
                    </div>

					<div class="wrap-input100 validate-input" >
						<input pattern="[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}" title="################" class="input100" type="text" name="credit" >
						<span class="focus-input100" data-placeholder="Credit Card Number"></span>
					</div>

					<div class="wrap-input100 validate-input" style="width: 70px;">
						<input pattern="[0-9]{3}" title="###" class="input100" type="text" name="cvv" >
						<span class="focus-input100" data-placeholder="CVV"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" onclick="chk()" name = "submit">
								Sign up
							</button>
						</div>
					</div>
					

				</form>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<?php
		//第一次直接跳錯誤帳號密碼，之後DEBUG
		if(!isset($_POST["submit"])){
			exit;
		}//檢測是否有submit操作
		else{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];	
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$credit = $_POST['credit'];
			$cvv = $_POST['cvv'];

			if ($credit != "" && $email != ""){//如果使用者名稱和密碼都不為空
				
				$sql2 = "INSERT INTO credit(Cre_FirstName, Cre_LastName, Cre_Num, Cre_CCV) VALUES ('$fname', '$lname', $credit, '$cvv')";
				$sql1 = "INSERT INTO account(Acc_PhoneNumber, Acc_Email, Acc_Passward, Cre_Num) VALUES ('$phone', '$email', '$password', $credit)";
				// $sql = "SELECT * FROM account WHERE Acc_Email = '{$_POST['email']}' and Acc_Passward = '{$_POST["pass"]}'";//檢測資料庫是否有對應的username和password的sql

				$result2 = mysqli_query($conn,$sql2) or die('MySQL query error');
				$result1 = mysqli_query($conn,$sql1) or die('MySQL query error');//執行sql
				
				
				if($result1 && $result2){//0 false 1 true
					$sql = "SELECT Acc_Email FROM account WHERE Acc_Email = '$email'";
					$result = mysqli_query($conn,$sql) or die('MySQL query error');//執行sql
					$count = mysqli_fetch_array($result);
					$add = $count['Acc_Email'];
					echo "<script>alert('註冊成功'); location.href ='../homepage.php?add=$add'</script>";
					exit;
				}else{
					echo "<script>alert('註冊信息有誤')</script>";
				}
			}else{
				echo "<script>alert('ERROR')</script>";
			}
		} 
			 
		mysqli_close($con);
	?>
</body>
</html>
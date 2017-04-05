<?php
	session_start();
?>
<?php
	error_reporting(0);
	
	require_once("includes/config.php");
	
	if(isset($_SESSION['user']['id'])){
		
		header("location: dashboard.php");
	}
	
	if(isset($_POST['login_btn'])){
		
		$error = login();
		
		if(!count($error)){
			
			$get_user = "select * from auth where name='".$_POST['username']."' AND password='".$_POST['password']."' ";
			
			$result = mysqli_query($dbcon,$get_user);
			
			if(mysqli_num_rows($result)>0)
			{
				header("location: dashboard.php");
			}
			else{
				
				$msg_red = "Please Provide Valid Info";
				
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metapercept</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
   <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
	
  </head>
  <body class="bg">
<div class="container-fluid">
	<div class="col-md-12 ">
		<div class="row">
			<div class="controls">
				<?php if(isset($error['username'])){?>
					<div class="alert alert-danger errors">
					<?php echo $error['username'];?>
					</div>
				<?php } ?>
					
				<?php if(isset($error['password'])){?>
					<div class="alert alert-danger errors">
					<?php echo $error['password'];?>
					</div>
				<?php } ?>
					
				<?php if(isset($msg_red)){?>
					<div class="alert alert-danger errors">
					<?php echo $msg_red;?>
					</div>
				<?php } ?>

				<div class="dev-page-login-block">
					<a class="dev-page-login-block__logo"><img src="img/Logo.png" alt="meta"></a>
						
					<div class="dev-page-login-block__form">
					   <div class="title">
							<strong>Welcome</strong>, please login
						</div>
						  
						<form method="POST">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="username" class="form-control" placeholder="Please Enter Username" value="<?php echo isset($_POST['username'])? $_POST['username']:''; ?>" /><br/>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" name="password" class="form-control" placeholder="Please Enter Password" value="<?php echo isset($_POST['password'])? $_POST['password']:''; ?>" /><br/>
								</div>
							</div>
								
							<input type="submit" name="login_btn" value="login" class="btn btn-danger btn-block"><br/>
						</form>
					</div>
				</div>	
			</div>
		</div>
	</div>
  <!--Footer section-->
		<p><?php include("includes/footer.php"); ?></p>
    <!--/Footer-->
  </body>
 </html>

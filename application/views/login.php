<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title><?php  echo PROJECT_NAME.' | '.$page_title ?></title>
	<style type="text/css">
		body{			
				background:url('public/images/bg7.jpg');	
				background-size: cover;	
				overflow-x:hidden;			
				background-repeat: no-repeat;
			}
			b,p,button{
				color:DeepPink;
			}
			.register{
			  position: relative;
			  margin-right:30px;
			}
	</style>
</head>
<body>
									<?php //$this->load->view('common/navbar') ?>
									
	<br>
	<br>
	<br>									<!--Carousel/Slde show-->
	<section>
		<div class="row">
			<div  class="col-md-offset-1" style="float:right">
				<a href="<?php echo base_url('register')?>">
					<button type="submit" id="submit_button" class="btn btn-cool btn-md btn-sm register" value="register">Register
					</button>
				</a>
				 
			</div>
			<div class="col-sm-offset-3 col-sm-6">
						<h3><b>LOGIN TO EXPLORE</b></h3>
				<form id="login_form" name="login_form" method="POST" action="<?php echo base_url('login/login_user')?>">
					<input type="hidden" id="ref" value="<?php //echo $ref ?>">
					<div class="form-group">
						<b>USERNAME</b>
						<input type="text" name="person_username" id="person_username" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>PASSWORD</b>
						<input type="password" name="person_password" id="person_password" class="form-control" required="">
					</div>
					<!-- <div class="form-group divider-sm">
						
						<label class="rememberme mt-checkbox mt-checkbox-outline">
	                        <input type="checkbox" name="rememberme[]" id="rememberme" value="" onclick="remebr()"> Remember me
	                        <span></span>
	                    </label>
	                   
	                </div> -->
	                <div class="form-group">
	                    <button type="submit" id="submit_button" class="btn btn-cool btn-md-sm" value="login">Login</button>
					<div>
				</form>
			</div>
			<div class="divider divider-lg">
			</div>
		</div>
	</section>		
	<script type="text/javascript">
 var base_url = '<?php echo base_url(); ?>';
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>     
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.validate.min.js"></script> 
 <script type="text/javascript" src="<?php //echo base_url(); ?>public/js/form_login.js"></script> 	-->	
					<!--Remember ME-->
<script>

	function remebr()
	{
		if(document.getElementById("rememberme").checked )
		{
			document.getElementById("rememberme").value = 1;
			console.log(document.getElementById("rememberme").value);
		}else {
			document.getElementById("rememberme").value = 0;
			console.log(document.getElementById("rememberme").value);
		}

			var rembrme = document.getElementById("rememberme").value;
			alert(rembrme);
	}
	
</script>							
</body>
</html>
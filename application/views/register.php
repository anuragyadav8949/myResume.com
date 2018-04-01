<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title><?php echo PROJECT_NAME.' | '.$page_title ?></title>
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
				<a href="<?php echo base_url('login')?>">
					<button type="submit" id="submit_button" class="btn btn-cool btn-md btn-sm register" value="register">Login
					</button>
				</a>
				 
			</div>
			<div class="col-sm-offset-3 col-sm-6">
						<h3><b>REGISTER TO EXPLORE</b></h3>
				<form id="register_form" name="register_form" method="POST" action="<?php echo base_url('login/register_user')?>">
					<div class="form-group">
						<b>First Name</b>
						<input type="text" name="person_firstname" id="person_firstname" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Last Name</b>
						<input type="text" name="person_lastname" id="person_lastname" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Company Name</b>
						<input type="text" name="company_name" id="company_name" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Email</b>
						<input type="email" name="person_email" id="person_email" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Date of Birth</b>
						<input type="date" name="dob" id="dob" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Password</b>
						<input type="password" name="person_password" id="person_password" class="form-control" required="">
					</div>
					<div class="form-group">
						<b>Confirm Password</b>
						<input type="password" name="confirm_password" id="confirm_password" class="form-control" required="">
					</div>
	                <div class="form-group">
	                    <button type="submit" id="submit_button" class="btn btn-cool btn-md-sm" value="register">Register
	                    </button>
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
</body>
</html>
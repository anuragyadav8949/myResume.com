<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('home');?>">myResume.com</a>
		</div>
		<div class="collapse navbar-collapse" id="mynav">
			<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo site_url('home');?>">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">About me <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('/technical');?>">Technical Background</a></li>
						<li><a href="<?php echo site_url('/experience');?>">Internships/Projects</a></li>
					</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<!-- <li><a href="#myModal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
			<li><a href="#myModalLogin" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> -->
			<p class="navbar-text"><b>Hi,<?php echo $this->session->userdata('user_firstname'); ?></b></p>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge">
					<span class="glyphicon glyphicon-user"><span class="caret"></span></span>
				</a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Profile</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Notifications</a></li>
					<li class="divider"></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('/logout')?>">Sign Out</a></li>
				</ul>
				
			</li>
		</ul>
		<p class="navbar-text"><b>+91 9619568807/ anurag.yadav8949@yahoo.com</b></p>
		</div>
	</div>
</nav>
												<!--Modal-->
												
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
			<!--modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3>Sign Up!</h3>
			</div>
			<div class="modal-body">
				<p>Sign Up! Feature Will Update soooonn...</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div id="myModalLogin" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
			<!--modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3>LogIn!</h3>
			</div>
			<div class="modal-body">
				<p>LogIn Feature Will Update soooonn...</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
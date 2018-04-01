<!DOCTYPE html>
<html lang="en">
<head>
	
		<meta charset="utf-8">
		<meta name = "viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title><?php echo PROJECT_NAME.' | '.$page_title ?></title>
	<style type="text/css">
		body{			
			background:url('public/images/bg4.jpg');
			background-size: 100%;
		}

		div.c-wrapper{
			width:100%;
			margin:auto;
		}
		.carousel-caption{
			position: absolute;
    		top: 50%;
    		left: 50%;
    		transform: translate(-50%, -50%);
		}
		.diff_text{
			color:green;
		}

		.carousel-inner > .item > img{
			width:100%;
			height:10%
		}

		.progress-bar{
			width:40%;
		}
	
	


	</style>
</head>
<body>
									<?php $this->load->view('common/navbar') ?>
									<!--tabs/pills-->
<!-- same as nav bar
<div class="container-fluid">
	<ul class="nav nav-pills">
		<li class="active"><a href="index.html">Home</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">About me<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Technical Background</a></li>
				<li><a href="#">Academics Records</a></li>
				<li><a href="#">Internships/Projects</a></li>
			</ul>
		</li>
		<li><a href="#">Connect</a></li>
		<li><a href="#">Blog</a></li>
	</ul>
</div>-->
										<!--Carousel/Slde show-->
	<div class="c-wrapper">									
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      	<img src="<?php echo base_url()?>public/images/ss1.jpg" alt="Image1.jpg">
			      <div class="carousel-caption">
			      	<h3>Technology</h3>
			      	<p>Which Ease the world!!</p>
			      </div>	      
		    </div>

		    <div class="item">
			      <img src="<?php echo base_url()?>public/images/ss2.jpg" alt="Image2.jpg">
			      <div class="carousel-caption">
			      		<h3>Technology</h3>
			      		<p>A Virtual World!!</p>
			      </div>
		    </div>

		    <div class="item">
			      <img src="<?php echo base_url()?>public/images/ss3.jpg" alt="Image3.jpg">
			      <div class="carousel-caption">
			      	<span class="diff_text">
			      		<h3>Technology</h3>
			      		<p>Power to Ease Problems!!</p>
			      	</span>
			      		
			      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>								
										<!--Jumbotron-->
<div class="container">
	<div class="jumbotron">
		<h2>Technical Stuff</h2>
		<p>Things I am aware about is</p>
		<div class="progress">
			<div class="progress-bar progress-bar-sucess progress-bar-striped" role="progressbar" aria-valuenow="10" 
			aria-valuemin="0" aria-valuemax="20">40% (Keep learning)
			</div>
		</div>
	</div>
</div>	
										<!-- profile section -->
<br/>
<br/>
<div class="container-fluid ">
		
			<!--</blockquote>-->
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo base_url()?>public/images/me.jpg" class="img-circle" alt="profile.jpg" width="160" height="170">
		</div>
		<div class="col-md-8">
			<p><b>A budding professional in IT to become a expert in (Management/Technical) domain
				<br> who plays an important role in this Industry, to contribute for easiar and richer life.</b>
			</p>
			</h3>	
		</div>
	</div> 
</div>
											<!--Academics -->
<div class="container">
 	<h3>Academics</h3>
 	<div class="table-responsive">
 		<table class="table table-hover">
 			<thead>
 				<th>Stream</th>
 				<th>University</th>
 				<th>Year</th>
 				<th>Percentage</th>
 				<th>College</th>
 			</thead>
 			<tbody >
 				<tr>
 					<td><abbr title="Bachelor's In Information Technology">Bsc(IT)</td>
 					<td>Mumbai</td>
 					<td>2016</td>
 					<td>55%</td>
 					<td>Thakur college</td>
 				</tr>
 				<tr>
 					<td>HSC</td>
 					<td>Mumbai</td>
 					<td>2013</td>
 					<td>53%</td>
 					<td>Thakur college</td>
 				</tr>
 				<tr>
 					<td>SSC</td>
 					<td>Mumbai</td>
 					<td>2010</td>
 					<td>74%</td>
 					<td><abbr title="Trimurti High School">THS</abbr></td>
 				</tr>
 			</tbody>
 		</table>
 	</div>
</div>
									<!--I frame section-->
<!--<div class="container">
	<div class="row">
		<div class="col-md-4">
			<p>Entertainment Section</p>
			<div class="embed-responsive embed-responsive-4by3">
		    	<iframe width="200" height="200" src="https://www.youtube.com/embed/FXmeHO-OVFk" frameborder="0" allowfullscreen></iframe>
		  	</div>
		 </div>
	</div>
</div>-->
									
									<!--Pagination-->
									<!--Glyphicon and Badge-->
<!-- <div class="container-fluid">
<a  href="#"><span class="badge"><span class="glyphicon glyphicon-envelope"></span></a>
</div> -->
									<!--Media Objects-->
<!--<div class="media">
	<div class="media-left media-top">
		<img src="Images/me.jpg" class="media-object" style="width:50px">
	</div>
	<div class="media-body">
		<h4 class="media-heading">My Profile</h4>
		<p>Its a start to make profile...will update sooooooooonn...</p>
	</div>
</div> -->
									<!--Nested Media Objects-->
<!-- <div class="media">
	<div class="media-left media-top">
		<img src="Images/me.jpg" class="media-object" style="width:50px">
	</div>
	<div class="media-body">
		<h4 class="media-heading">My Profile</h4>
		<p>This is Nested media objects</p>
		<div class="media">
			<div class="media-left">
				<img src="Images/me.jpg" class="media-object" style="width:50px">
			</div>
			<div class="media-body">
					<h4 class="media-heading">My Profile</h4>
					<p>This is Nested media objects</p>
			</div>
		</div>
	</div>
</div> -->

		<?php $this->load->view('common/footer') ?>
	
		
</body>
</html>
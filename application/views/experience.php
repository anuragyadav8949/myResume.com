<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name = "viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Project/Intrnship</title>
	<style type="text/css">
	.panel-heading{
		background-color:#1E90FF;
	}
	</style>
</head>
<body>
									<!--Navbar-->
								<?php $this->load->view('common/navbar'); ?>					
									
<br/>
<br/>
<br/>
<div class="row">	
											<!--Internship-->
	<div class="col-md-6 ">
		<div class="panel-group" id="accordion">
		<div class="panel panel-info">
			<div class="panel-heading">
					<h2 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Internships</a>
					</h2>
			</div>
			<div id="collapse2" class="panel-collapse collapse in">
				<div class="panel-body">
						<a href="#description" data-toggle="collapse"><h4>Software Developer Trainee(4 Months)</h4></a>	
					<div id="description" class="collapse">
						<i><p><b>Company:</b>Trademill Techologies</p>
						<i><p><b>Duration:</b>4 Months</p>
						<p><b>Roles & Responsibility :</b>During internship Mainly Worked on <b>Database Using MySQL</b><br>
							Handled Databases,On database Server.<br/>
							Good Grasp on Relational Database.</p></i>
					</div>
					<a href="#description2" data-toggle="collapse"><h4>Web Developer Trainee(3 Months)</h4></a>	
					<div id="description2" class="collapse">
						<i><p><b>Company:</b>Nextasy Technologies.</p>
						<i><p><b>Duration:</b>3 Months</p>
						<p><b>Roles & Responsibility :</b>During internship I Worked on some Modules of<b>Multiple</b><br>
							Websites & CRM's Which are mainly Built on,<br/>
							<b>PHP & MySQL</b> using framework <b>Codeignitor</b></p></i><br/>							
							<h5><b>CRM's</b></h5>
							<ul>
								<li>electromech</li>
								<li>princepolo</li>
								<li>handvorganic</li>
								<li>Kenarc</li>															
							</ul>
							<h5><b>Websites</b></h5>
							<ul>
								<li><a href="https://handvorganic.com/" target=_blank> handvoragic</a></li>
								<li><a href="http://parthrealtors.com/" target=_blank> parthrealotrs</a></li>
								<li><a href="http://worldofbraces.in/" target=_blank> WorldofBraces</a></li>	
								<li><a href="http://www.drpatkars.com/" target=_blank> Dr.Patkars</a></li>
								<li>etc...</li>							
							</ul>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	</div>
											<!--Projects-->
	<div class="col-md-6">
		<div class="panel-group" id="accordion">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Projects</a>
					</h2>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<ul>
							<a href="#myResume" data-toggle="collapse"><li><h4>myResume</h4></li></a>
								<div id="myResume" class="collapse">
									<i><p>A Personal Web folder which describes about My Self,<br/>
										An approach to make a protfolio.</p></i>
								</div>
							<a href="#roomlight" data-toggle="collapse"><li><h4>Automatic Room Light Intensity Controller</h4></li></a>
								<div id="roomlight" class="collapse">
									<i><p><b>Third Year Project</b><br/>
										An Electronic project, Which counts a number of<br/>
										person present in a room,with the help of Sensor present at a door.<br/>
										It has Two sensor One for increment and Other for Descrement of a number<br/>
										On the basis of person entering in a room.
										<b>Programming</b> is done on <b>Microcontroller(8085)</b> using <b>C</b>.</i> 
									</p>	
								</div>
							<a href="#bankdummy" data-toggle="collapse"><li><h4>Bank Dummy Website</h4></li></a>	
								<i><div id="bankdummy" class="collapse">
									<p><b>Second Year Project</b><br/>
									Dummy Website of a bank of 5-6 pages.<br>
									Using HTML/CSS with the help of a tool <b>Kompozer</b>
								</p></i>
								</div>
						</ul>	
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
</body>
</hmtl>
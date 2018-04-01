<!DOCTYPE html>
<html>
<head>
		<meta charset ="utf-8"
		<meta name = "viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title><?php echo PROJECT_NAME.' | '.$page_title ?></title>
	<style type="text/css">
		body{			
			background:url('public/images/bg4.jpg');
			background-size: cover;
		}
		thead{
			font-family: Comic Sans MS;
			font-size:20px;
			color:black; 
		}
		tbody{
			color:black;
			font-style: italic;
		}
		.table-hover tbody tr:hover{
			background-color:Gray;
		}
		.page_topic{
			font-family: Comic Sans MS;
			font-size:40px;
			color:Crimson;
		}
	</style>
</head>
<body>
													<!--Navbar-->
						<?php $this->load->view('common/navbar') ?>						

<br/>
<br/>
<br/>
								<!--technical stuff-->
<div class="container-fluid">
	<h2 class="page_topic"><b>Technical Background</b></h2>
	<div class="table-responsive">
												<!--Programming Languages-->
		<table class="table table-hover">		
			<thead>
				<th class="dropdown toggle" data-toggle="dropdown">Programming Languages</th>
				<th>Level</th>
			</thead>
			<tbody>
				<tr>
					<td>C Programming</td>
					<td>Beginer</td>
				</tr>
				<tr>
					<td>C++ (Object Oriented Programming)</td>
					<td>Begginer</td>
				</tr>
				<tr>
					<td>PHP (Codeignitor)</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>Core Java</td>
					<td>Begginer</td>
				</tr>
			</tbody>
		</table>
														<!--Database-->
		<table class="table table-hover">
			<thead>
				<th>Database</th>
				<th>Level</th>
			</thead>
			<tbody>
				<tr>
					<td>MySQL</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>RDBMS</td>
					<td>Intermediate</td>
				</tr>
			</tbody>
		</table>
														<!--Scripting language-->
		<table class="table table-hover">
			<thead>
				<th>Scripting Languages</th>
				<th>Level</th>
			</thead>
			<tbody>
				<tr>
					<td>JavaScript</td>
					<td>Begginer</td>
				</tr>
				<tr>
					<td>JQuery</td>
					<td>Begginer</td>
				</tr>
				<tr>
					<td>AJAX</td>
					<td>Begginer</td>
				</tr>
			</tbody>
		</table>
													<!--Frontend Techologies-->
		<table class="table table-hover">
			<thead>
				<th>Frontend Technologies</th>
				<th>Level</th>
			</thead>
			<tbody>
				<tr>
					<td>HTML/HTML5</td>
					<td>Begginer</td>
				</tr>
				
				<tr>
					<td>CSS/CSS3</td>
					<td>Beginer</td>
				</tr>				
			</tbody>
		</table>
		<!-- <table class="table table-hover">
			<thead>
				<th>Interpersonal Skills</th>				
			</thead>
			<tbody>
				<tr>
					<td>HTML/HTML5</td>
					<td>Begginer</td>
				</tr>
				
				<tr>
					<td>CSS/CSS3</td>
					<td>Beginer</td>
				</tr>				
			</tbody>
		</table> -->
	</div>
</div>
</body>
</html>
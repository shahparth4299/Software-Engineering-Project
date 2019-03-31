<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>	
		.login
		{
			margin-top: 0.1%;
		}

		.login .card
		{
			background:rgba(0, 0, 0, .6);
		}

		.login label
		{
			font-size: 16px;
			color: #ccc;
		}

		.login input
		{
			font-size: 22px !imPPortant;
		}

		.login button:hover
		{
			padding: 0px 40px;
		}

		.card-action
		{
			background-color: green;
			color: white;
		}
		
		#login{
		  
		  opacity:100;
		  padding:4em;
		  position:absolute;
		  width: 100%;
		}
		body
		{
			color: #ffffff;
		}
		input[type=text]{
			color : #fff;
		}
		input[type=password]{
			color : #fff;
		}
		</style>
</head>
<body>
	<?php
		include 'navbar.php';
		include 'particlejs.php';
	?>
	<div id="login">
	<div class="login">
		<div class="row">
			<div class="col s4 offset-s4">
				<div class="card">
					<div class="card-action  white-text">
						<h3>
							Login 
						</h3>
					</div>
					<div class="card-content">
					<form action = "faculty_validate.php" method="POST">
						<div class="form-field">
						<label for="username"><b>UserName</b></label>
						<input type="text" id="username" name="fname">
						
					</div>
					<br>

					<div class="form-field">
						<label for="password"><b>Password</b></label>
						<input type="password" id="password" name="password">
					</div>
					<br>
					<div class="form-field center-align">
						<input type ="submit" value="Submit" class="btn-large #006064">
					</div>
					<br>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
    particlesJS.load('particles-js', 'particles.json', function(){
      console.log('particles.json loaded...');
    });
  </script>
</body>
</html>
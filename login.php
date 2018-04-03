<?php  
	session_start();
	if(isset($_SESSION["id"])) {
		if($_SESSION["privilege"] == 1) {
			header("Location: admin");
		} else if($_SESSION["privilege"] == 2) {
			header("Location: student");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | PUP-Binan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link href="https://www.pup.edu.ph/resources/images/icons/favicon.ico" rel="icon" type="image/x-icon" />
	<style type="text/css">
		body{
			background: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-image: url("img/background.jpg");
		}

		.card-panel {
			transition: box-shadow .25s;
		    padding: 0px;
		    border-radius: 2px;
		    background-color: #fff;
		}

		.container .row {
		    margin-left: -.75rem;
		    margin-right: -.75rem;
		   
		}

	    #logopup {
		    margin-top: -250px;
		    height: 220px;
		    width: 220px;
		}

		.form123{
			padding: 24px;
		    margin: .5rem 0 1rem 0;
		}

		.input-field.col.s12.l12.center-align {
		    margin-bottom: 30px;
		}

		@media only screen 
		and (min-device-width : 375px) 
		and (max-device-width : 667px) { 
		#logopup{
		    	height: 120px;
		    	width: 120px;
			}
		}

		.btn{
		    background-color: #7e0e09 !important;
		}

		.copy{
			text-align: center;
			color:gray;
			font-size: 11px;
		}

		@media 
		    only screen and (min-device-width: 320px) 
		    and (max-device-width: 480px) 
		    and (-webkit-device-pixel-ratio: 2) 
		    and (device-aspect-ratio: 2/3)
		{
		    #logopup{
			    height: 120px;
			    width: 120px;
			}
		}
	</style>
</head>
<body>
	<div class="container" style="margin-top: 30px;">
		<div class="container">
			<div class="container">
				<div class="card-panel z-depth-5">
					<form id="loginform" class="row">
						<div class="col s12 l12 m12 center-align">
							
						</div>
						<div class="col s12 l12 m12 center-align">
												<img class="responsive-img" src="img/background2.png">

						</div>
						<div class="form123">
						<div class="input-field col s12 l12">
							<i class="material-icons prefix">account_circle</i>
				        	<input id="username" type="text" class="validate" autocomplete="off" maxlength="15">
				        	<label for="username">Enter username</label>
				        </div>
				        <div class="input-field col s12 l12">
							<i class="material-icons prefix">lock</i>
				        	<input id="password" type="password" class="validate">
				        	<label for="password">Enter password</label>
				        </div>
				        <div class="input-field col s12 l12 center-align">
							<button class="hoverable light-blue waves-effect waves-light btn" type="submit" name="action">
								<i class="material-icons right">done</i>Login
							</button>
				        </div>
 					</form>
				</div>
			</div>
		</div>
	</div>
</div>
   <div class="copy">
				        	<p>Copyright &copy; 2018 JBERGANIO, JDCONSUL &amp; JDRIVERA<br> All right Reserved.</p>

				        </div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#loginform').submit(function(e) {
				e.preventDefault();
				$.ajax({
					url: 'controllers/auth.php',
					type: 'POST',
					dataType: 'json',
					data: {
						username: $('#username').val(),
						password: $('#password').val()
					},
					success: function(response) {
						if(response.status == 1) {
							if(response.privilege == 1) {
								window.location = "admin";
							} else {
								window.location = "student";
							}
						} else{
							alert("Error logging in");
						}
					}
				});
			});
		});
	</script>
</html>
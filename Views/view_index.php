<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/index.css">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

        
		
		<title>Bootstrap Login</title>


	</head>

	<body>
		<div class="container">
			
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
					<a class="navbar-brand"><img style="border-radius: 50%; width: 40px;" src="<?php  print_r($_SESSION['foto']) ;?>"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse " id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="navbar-item"><a href="../controllers/control_index.php">Home </a></li>
							<li class="navbar-item"><a href="#contactanos">contactanos</a></li>
							<li class="navbar-item"><a class="pull-right" href=""> <?php print_r($_SESSION['nombre']);?> </a></li>
							<li class="navbar-item"><a class="pull-right" href="../controllers/control_logout.php?destroy"> <span class="glyphicon glyphicon-off"></span> Cerrar </a></li>
						</ul>
					</div>
				</nav>
			
				
			<div class="col-12" id="home">
				<h2 class="col-12" align="center">Hello </h2>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12" id="contactanos">
					<h2 class="col-12" align="center">conocenos </h2>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" language="javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/style.js" ></script>
</html>

<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kusina Online</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
		<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
		<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body><br/>

	<?php
		if(isset($_SESSION['id'])){
			
		}	
		else{
			header("Location: login.php");
		}
		
		
	?>
	

<div class="container">
	<form action="logout.php" method="POST">
		<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<a class="navbar-brand" href="home.php"><b> KUSINA ONLINE </b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="customer.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="menu.php">&nbsp;&nbsp;&nbsp;&nbsp;Menu</a>
		
		
		<li class="nav-item">
			<a class="nav-link" href="order_reports.php">&nbsp;&nbsp;&nbsp;&nbsp;Reports</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;About</a>
		</li>
		
		<li class="nav-item">
			<a class="nav-link" href="changepass.php">&nbsp;&nbsp;&nbsp; Change Password </a>
		</li>
		
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"><br/><br/>
			<a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<br/><br/>
		<center><img src="images/kusina3.jpg" class="img-fluid" alt="Responsive image">
		
</body>
</html>
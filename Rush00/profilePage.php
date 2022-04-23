<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="doft.css" >
	<link rel="stylesheet" href="menu.css" >
</head>
<body>
	<div>
		<ul class="main-navigation">
			<li>
				<a href="#1">Menubar</a>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="logout.php">Log out</a>
					</li>
					<li>
						<a href="delete.php">Delete Yourself</a>
					</li>
					<li>
						<a href="#">SCAM</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome, <?=$_SESSION['login']?>!</p>
	</div>
</body>
</html>
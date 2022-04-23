<?php
	session_start();

	$available_products = array('Steam-Gift-Card', 'Netflix-Gift-Card', 'Google-Play-Gift-Card', 'Steam-Gift-Card', 'Heal-Your-Pain');
	
	if (empty($_SESSION['cart']) == false)
	{
		foreach ($_SESSION['cart'] as $product)
		{
			if ($product == "1")
			{
				$steam_card++;
				$total = $total + 19.90;
			}
			if ($product == "2")
			{
				$netflix_card++;
				$total = $total + 19.90;
			}
			if ($product == "3")
			{
				$google_card++;
				$total = $total + 19.90;
			}
			if ($product == "4")
			{
				$amazon_card++;
				$total = $total + 19.90;
			}
			if ($product == "5")
			{
				$heal_pain++;
				$total = $total + 25.00;
			}
		}
	}


?>

<html>
	<head>
		<title>shopping cart</title>
		<style>
			.items-and-checkout {
				width: 90%;
				height: 800px;
				position: absolute;
				display: flex;
				flex-direction: row;
			}
			.content {
				width: 80%;
			}
			.items {
				width: 400px;
			}
			img {
				width: 150px;
			}
		</style>
	</head>
	<body>
		<nav>
			<ul class="main-navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
			</ul>
			<div>
				<h2 class="text">Your Cart</h2>
		</nav>
	
		<div class="items-and-checkout">
			<div class="content">
				 <?php if(isset($steam_card)) {
					echo "<div class=\"items\">";
					echo "<h1>Steam Gift Card 19.99</h1>";
					echo "<img src=\"./resources/320x320.jpeg\" alt=\"Denim Jeans\" >";
					echo "Ammount : $steam_card";
					echo "<a href=\"./remove-items.php?id=1&ammount=1\"><button>REMOVE 1</button></a>";
					echo "<a href=\"./remove-items.php?id=1&ammount=0\"><button>REMOVE ALL</button></a>";
					echo "</div>";
				 }
				 if(isset($netflix_card)) {
						echo "<div class=\"items\">";
						echo "<h1>Steam Gift Card 19.99</h1>";
						echo "<img src=\"./resources/610.png\" alt=\"Denim Jeans\" >";
						echo "Ammount : $netflix_card";
						echo "<a href=\"./remove-items.php?id=2&ammount=1\"><button>REMOVE 1</button></a>";
						echo "<a href=\"./remove-items.php?id=2&ammount=0\"><button>REMOVE ALL</button></a>";
						echo "</div>";
				 }
				if(isset($google_card)) {
					echo "<div class=\"items\">";
						echo "<h1>Steam Gift Card 19.99</h1>";
						echo "<img src=\"./resources/gift.png\" alt=\"Denim Jeans\" >";
						echo "Ammount : $google_card";
						echo "<a href=\"./remove-items.php?id=3&ammount=1\"><button>REMOVE 1</button></a>";
						echo "<a href=\"./remove-items.php?id=3&ammount=0\"><button>REMOVE ALL</button></a>";
						echo "</div>"; 
				}
				if(isset($amazon_card)) {
					echo "<div class=\"items\">";
						echo "<h1>Steam Gift Card 19.99</h1>";
						echo "<img src=\"./resources/org.png\" alt=\"Denim Jeans\" >";
						echo "Ammount : $amazon_card";
						echo "<a href=\"./remove-items.php?id=4&ammount=1\"><button>REMOVE 1</button></a>";
						echo "<a href=\"./remove-items.php?id=4&ammount=0\"><button>REMOVE ALL</button></a>";
						echo "</div>";
				}
				if(isset($heal_pain)) {
					echo "<div class=\"items\">";
						echo "<h1>Heal Your Pain 25.00</h1>";
						echo "<img src=\"./resources/cd-and-dvd/you-are-not-your-pain.jpeg\" alt=\"Denim Jeans\" >";
						echo "Ammount : $heal_pain";
						echo "<a href=\"./remove-items.php?id=5&ammount=1\"><button>REMOVE 1</button></a>";
						echo "<a href=\"./remove-items.php?id=5&ammount=0\"><button>REMOVE ALL</button></a>";
						echo "</div>";
				}
				echo "<h3>Total Ammount: $total</h3>"
				?>
			</div>
			<div class="usr-info-and-checkout">
				<form action="/action_page.php">
					<label for="fname">First name:</label><br>
					<input type="text" id="fname" name="fname" value="Name"><br>
					<label for="lname">Last name:</label><br>
					<input type="text" id="lname" name="lname" value="Surname"><br><br>
					<label for="lname">Address:</label><br>
					<input type="text" id="address" name="address" value="Address"><br><br>
					
					<?php if (isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] !== '') { ?>
						<a href="./checkout.php" class="myButton">PURCHASE</a>
					<?php } ?>
					<?php if (isset($_SESSION['loggued_on_user']) == false || $_SESSION['loggued_on_user'] == '') { ?>
						<a href="./login.html" class="myButton">LOG IN</a>
						<br>
						or 
						<a href="./registration.html" class="myButton">REGISTER</a>
					<?php } ?>
				</form>
			</div>
		</div>
		
	</body>
</html>

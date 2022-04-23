<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="doft.css">
    <link rel="stylesheet" href="menu.css">

</head>

<body>
    <!--
			top bar
		-->
    <nav>
        <div class="menu-items">SCAMSITE</div>
        <div class="menu-items">
            <a href="learn-php.php">LEARN PHP</a>
        </div>
        <div class="menu-items">
            <a href="./productPages.php">PRODUCTS</a>
        </div>
        <div class="menu-items">
            <a href="./registration.html">REGISTRATE</a>
        </div>
        <div class="menu-items">
            <a href="./login.html">LOGIN</a>
        </div>
        <div class="menu-items">
            <a href="./heal.html">HEAL PHP INDUCED PTSD</a>
        </div>
        <a href="./shopping-cart.php">
            <img class="cart" src="./resources/shopingcart.png" title="cart" alt="cart">
        </a>
    </nav>
<div class="middle_block">
		<div class="left-side">
			<img class="scam-pic" src="./resources/scam.png" alt="" style="width: inherit;" style="margin-top: 19%";>
		</div>
	<div class="homepage-products">
		<div class="card">
			<img src="./resources/320x320.jpeg" alt="Denim Jeans" style="width:50%">
			<h1>Steam Gift Card</h1>
			<p class="price">$19.99</p>
			<a href="./add-yo-cart.php?id=1">
			<button>Add to Cart</button>
			</a>
		</div>
		<div class="card">
			<img src="./resources/610.png" alt="Denim Jeans" style="width:50%">
			<h1>Netflix Gift Card</h1>
			<p class="price">$19.99</p>
			<a href="./add-yo-cart.php?id=2">
			<button>Add to Cart</button>
			</a>
		</div>
		</div>




    </div>
    <!--
				form bar

    <div class="form">
        <div style="margin-left: 10px; margin-top: 10px;">
            <p>Vous </p>
            <h2>Register </h2>
            <p>alors dans une grande piece rempile</p>
            <br>
            <p>d'</p>
            <h3>ordinateurs</h3>
            <p>...</p>
            <p>
                <br>
                <i>  - Bonjour, vous êtes nouveau ici ? </i>
            </p>
        </div>
        <form action="create_account.php" method="post">
            Username: <input type="text" name="login" value="" />
            <br />
            Password: <input type="password" name="passwd" value="" />
            <input type="submit" name="submit" value="OK" />
        </form>
    </div>-->
    </div>
</body>

</html>
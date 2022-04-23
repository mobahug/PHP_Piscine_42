<?php
	session_start();
	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'], $_GET['id']);
?>

<p>
	<h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Product was succesfully added to your cart.</h1>
	<div style="display: flex;" style="flex-direction: column;">
		<a style="margin-top: 40px;" style="margin-bottom: 40px;" href="shopping-cart.php"><button>Go to Your cart</button></a>
		<a href="./productPages.php"><button>Go back to shopping</button></a>
	</div>
</p>
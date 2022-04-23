<?php
session_start();
if (empty($_SESSION['cart'])) {
	echo "YOUR CART IS EMPTY!";
	echo "<a href=\"index.php\">Return Home</a>";
}
if ($_GET['ammount'] == 1){
	$position = array_search($_GET['id'], $_SESSION['cart']);
	unset($_SESSION['cart'][$position]);
}
if ($_GET['ammount' == 0])
{
	$cart_length = count($_SESSION['cart']);
	
	for ($i = 0; $i < $cart_length; $i++)
	{
		$position = array_search($_GET['id'], $_SESSION['cart']);
		unset($_SESSION['cart'][$position]);
	}
}
?>

<a href="./productPages.php">go back to products</a>
<br>
<a style="margin-top: 40px;" style="margin-bottom: 40px;" href="shopping-cart.php"><button>Go to Your cart</button></a>

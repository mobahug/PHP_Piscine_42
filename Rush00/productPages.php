<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <title>Products</title>
	 <link rel="stylesheet" href="menu.css">
	 <link rel="stylesheet" href="product_style.css">
	 <style>
		 .products-display {
			width: 90%;
			height: 95vh;
			background-color: aquamarine;
			display: flex;
			margin-top: 6vh;
			flex-wrap: wrap;
			flex-direction: row;
			justify-content: space-around;
			position: absolute;
			margin-left: 6vw;
		}
	 </style>
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
                        <a href="#">Log out</a>
                    </li>
                    <li>
                        <a href="#">SCAM</a>
                    </li>
                    <li>
                        <a href="#">SCAM</a>
						
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="products-display">
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
							<p><button>Add to Cart</button></p>
							</a>
						</div>
						<div class="card">
							<img src="./resources/320x320.jpeg" alt="Denim Jeans" style="width:50%">
							<h1>Steam Gift Card</h1>
							<p class="price">$19.99</p>
							<a href="./add-yo-cart.php?id=1">
								<p><button>Add to Cart</button></p>
							</a>
						</div>
						<div class="card">
							<img src="./resources/610.png" alt="Denim Jeans" style="width:50%">
							<h1>Netflix Gift Card</h1>
							<p class="price">$19.99</p>
							<a href="./add-yo-cart.php?id=2">
								<p><button>Add to Cart</button></p>
							</a>
						</div>
						<div class="card">
							<img src="./resources/gift.png" alt="Denim Jeans" style="width:50%">
							<h1>Goodle Play Gift Card</h1>
							<p class="price">$19.99</p>
							<a href="./add-yo-cart.php?id=3">
								<p><button>Add to Cart</button></p>
							</a>
						</div>
						<div class="card">
							<img src="./resources/org.png" alt="Denim Jeans" style="width:50%">
							<h1>Steam Gift Card</h1>
							<p class="price">$19.99</p>
							<a href="./add-yo-cart.php?id=4">
							<p><button>Add to Cart</button></p>
							</a>
						</div>
    </div>
</body>

</html>
<?php 
	// print_r($_GET);
	$productID = $_GET['id'];
	$productName = $_GET['productName'];
	$productsData = [
		[
			'id'=>2,
			'name'=>'Zika', 
			'image'=>'https://i.ytimg.com/vi/ug0o6I1MuFY/hqdefault.jpg'
		],
		[
			'id'=>8,
			'name'=>'Slika', 
			'image'=>'https://i.ytimg.com/vi/97r9ICQ5i20/maxresdefault.jpg'
		]
	];

	foreach($productsData as $product){
		
		if($product['id'] == $_GET['id']){
		$productData = $product;
		break;
		}
	}
		
?>
<html>
	<head></head>
	<body>
		<a href="index.php">Home</a>
		<a href="products.php">Products</a>
		<a href="about.php">About us</a>
		<a href="contact.php">Contact us</a>

		<h1><?php echo $productData['name']; ?> <br><span style="font-size:16px; font-weight:300">My product details</span></h1>
		</h2>

		<img src="<?php echo $productData['image']; ?>" alt="">
		<p><strong>Opis is here:</strong> ASASana ga sdfasdfas df sad fasdf</p>
		
	</body>
</html>
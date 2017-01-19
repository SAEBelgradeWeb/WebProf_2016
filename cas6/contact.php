<html>
	<head>
	</head>
	<body>
		<a href="index.php">Home</a>
		<a href="products.php">Products</a>
		<a href="about.php">About us</a>
		<a href="contact.php">Contact us</a>

		<h1>Contact</h1>

		<form action="parseContact.php" method="post">
			<label for="name">Name</label>
			<input type="text" name="name">
<br>
			<br>	
			<label for="email">Email</label>
			<input type="text" name="email"> <br>
			<br>	
			<label for="message">Message</label>
			<br>	
			<textarea name="message" id="message" cols="30" rows="10">
				
			</textarea>
<br>
			<br>	
			<input type="submit" value="Send">
		</form>
	</body>
</html>






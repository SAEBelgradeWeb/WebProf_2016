<pre>
<?php

// create query string with 

	// city = Belgrade
	// class= Professional
	// unversity = SAE

//in browser you should type: 
// localhost/profesional/get.php?city=Belgrade&class=Professional

// print get query in php and browser
echo "GET request <br>";
print_r($_GET);
echo "<br><br>";
echo "POST request <br>";
print_r($_POST);
/// URL should be: get.php?productid=5
// $productID = $_GET['productid'];
// echo 'productID = '.$productID;

// product ID = 15

?>

<form action="" method="post">
	<label for="fName">First name</label>
	<input type="text" name="firstName" id="fName" placeholder="enter your damn name...!">

	<label for="password">Password</label>
	<input type="password" name="password" id="password" placeholder="enter your damn password...!">

	<input type="hidden" name="hiddenValue" value="adomfasdfsd">

	<label for="mC">My checkbox</label>
	<input type="checkbox" name="myCheck" id="mC">
	<input type="submit" value="GO">
</form>














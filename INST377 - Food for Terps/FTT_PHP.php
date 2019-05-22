<!DOCTYPE html>
<html>
<head>
	<title>Food for Terps</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<?php
  // The code to process recieved data from the form goes to here.

  /* Database Credentials
   * $dbuser: database username
   * $dbpass: database password
   * $dbname: the name of the Database
   */

  $dbuser = 'root';
  $dbpass = 'password';
  $dbname = 'foodforterps';

$conn = new mysqli("localhost", $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
}

$diet = $_POST['diet'];
$cuisine = $_POST['cuisine'];
$rate = $_POST['rate'];
$price= $_POST['price'];

/* SQL statement to save the values into the database. Using HEREDOC syntax
 * for multiline strings.
 */
$sql = <<<SAVESQL
INSERT INTO input
	(diet, cuisine, rate, price) VALUES ('$diet', '$cuisine', '$rate', '$price');

SAVESQL;


if ($conn->query($sql)) {
	echo "<h3> Your Preferences: </h3>";

	echo "Dietary Restriction: <strong>$diet</strong> <br><br>";
	echo "Cuisine: <strong>$cuisine </strong><br><br>";
	echo "Average Rating: <strong>$rate star</strong> <br><br>";

	//price output: cheap, moderate, expensive
	if ($price == 1){
		echo "Price Range: <strong>Cheap</strong> <br><br><br>";
	} else if ($price == 2) {
		echo "Price Range: <strong>Moderate</strong> <br><br><br>";
	} else if ($price == 3) {
		echo "Price Range: <strong>Expensive</strong> <br><br><br>";
	}

	echo "<h3>Based on your preferences Food For Terps recommends:</h3>";
//mimics output based on user Preferences
	if ($cuisine == "Bar"){
		echo "<h1> R.J. Bentley's </h1> ";
	} else if ($cuisine == "Pakistani"){
		echo "<h1> Krazi Kebob </h1> ";
	}else if ($diet == "Vegan"){
			echo "<h1> Nuvegan Cafe </h1> ";
	} else {
		echo "<h1> Food For Terps is still looking for restaurants to fit your needs</h1> ";
	}


} else {
  echo "Error: $conn->error<br /><pre>$sql</pre><br />";
}

/* close the database connection */
$conn->close();
 ?>

</body>
</html>

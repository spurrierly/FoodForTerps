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
  $dbpass = 'spurrierly';
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

	echo "<h3>Based on your preferences Food For Terps recommends one of these restaurants:</h3>";

//Query from restaurant database
	$query =
	"SELECT name, address
	FROM restaurant
	WHERE diet LIKE '%".$diet."%'
	AND cuisine = '".$cuisine."' ";
	//$result = $conn->query($query);
	$result = mysqli_query($conn, $query);

	if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}

//Display SQL query
	if ($result->num_rows > 0) {
		while($row = mysqli_fetch_array($result)) {
			echo "Try out ", $row['name'], "! The address to ", $row['name'], " is " , $row['address'];
			echo "</br>";
		}
	}
	//If no results display 0 results and alternative restaurant
	else{
		echo "Sorry! 0 results.";
		echo "<br> Food For Terps is still working on expanding our database!";
		echo "<h4><br> But based on your dietary restrictions try one of these restaurants! <br></h4>";

		$backup =
		"SELECT name, address
		FROM restaurant
		WHERE diet LIKE '%".$diet."%' ";
		//$result = $conn->query($query);
		$backupresult = mysqli_query($conn, $backup);

		while($row = mysqli_fetch_array($backupresult)) {
			echo "Try out ", $row['name'], "! The address to ", $row['name'], " is " , $row['address'];
			echo "</br>";
		}

	}



} else {
  echo "Error: $conn->error<br /><pre>$sql</pre><br />";
}

/* close the database connection */
$conn->close();
 ?>

</body>
</html>

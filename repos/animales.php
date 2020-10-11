 <?php
	$servername = "db-micro";
	$username = "root";
	$password = "root";
	$dbname = "practices";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT nombre, tipo FROM animales";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
	  echo "<table><tr><th>NOMBRE</th><th>TIPO</th></tr>";
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "<tr><td>".$row["nombre"]."</td><td>".$row["tipo"]."</td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo "0 results";
	}
	$conn->close();
?> 
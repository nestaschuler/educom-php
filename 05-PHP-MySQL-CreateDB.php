<!-- Example of MySQLi Object-oriented-->

<?php
$servername = "localhost";
$username = "username";
$password = "pasword";

// Create connection
$conn = new mysqli($servername, $username, $password); 
//Check connection
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created succesfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//close connection
$conn->close();
?>

<!-- Example of PDO -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Could not connect. " . $e->getMessage());
}

try {
  $sql = "CREATE DATABASE myDB";
  $conn->exec($sql);
  echo "Database created successfully";
} catch(PDOException $e) {
  // Handle errors during db creation
  echo "Error creating database: " . $sql . "<br>" . $e->getMessage();
}

// Close connection
$conn = null;
?>


<?php

// include 'header.php';

echo 'ini adalah konten';

echo '<br/>';
echo '
<a href="/idbc/product.php">
    link ini menuju ke halaman produk.php
</a> "<br/>";
';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "idbc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `database1`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    var_dump( $row ); echo "<br/>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ikdev";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM cuisine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " - Volume" . $row["volume"]. "<br>";
		setcookie($row["id"], $row["volume"], time() + (86400), "/");
	    
    }
} else {
  setcookie(1, 0.4, time() + (86400), "/");
  setcookie(2, 0.8, time() + (86400), "/");
  setcookie(3, 0.6, time() + (86400), "/");
  setcookie(4, 0.2, time() + (86400), "/");
  setcookie(5, 0.4, time() + (86400), "/");
  setcookie(6, 0.2, time() + (86400), "/");
  setcookie(7, 0.3, time() + (86400), "/");
  setcookie(8, 0.6, time() + (86400), "/");
  setcookie(9, 0.3, time() + (86400), "/");
  setcookie(10, 0.4, time() + (86400), "/");
  setcookie(11, 0.25, time() + (86400), "/");
  setcookie(12, 0.25, time() + (86400), "/");
  setcookie(13, 0.25, time() + (86400), "/");
  setcookie(14, 0.25, time() + (86400), "/");
  setcookie(15, 0.25, time() + (86400), "/");
  setcookie(16, 0.6, time() + (86400), "/");
  setcookie(17, 0.25, time() + (86400), "/");
  setcookie(18, 0.4, time() + (86400), "/");
    setcookie(19, 0.3, time() + (86400), "/");
}

for($i=1; $i<20; $i++){
echo " <a id='a".$i."'>".$_COOKIE[$i]."<br> ";}
$conn->close();
?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phphistory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT a,b,opp,result,date FROM calc_history limit 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " " . $row["date"]." : " . $row["a"]. " " . $row["opp"]. " " . $row["b"]. "= " . $row["result"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
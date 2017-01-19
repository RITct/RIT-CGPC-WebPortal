<html> 
    <body>
    <?php
include "db_config.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        
$sql = "SELECT uname, pass FROM person";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["uname"]. " - Name: " . $row["pass"]."<br>";
    }
}
        else {
    echo "0 results";
}
    ?>
    </body>
</html>
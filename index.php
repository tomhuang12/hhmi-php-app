<h1>Hello!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'user';
$pass = 'password';

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL successfully! <br>";
    $sql = "SELECT * FROM ecommerce.users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Age: " . $row["age"]. " Gender: " . $row["gender"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}

$conn->close();
?>  
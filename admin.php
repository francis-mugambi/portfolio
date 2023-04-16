<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin poage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/folio.jpg" rel="icon">
  <link href="assets/img/folio.jpg" rel="apple-touch-icon">
</head>

<body>

<?php
$servername = "localhost";
$username = "careergu_francis";
$password = "FRANKMUGAH97@g";
$dbname = "careergu_messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, subject, message FROM myfolio_messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border: solid 2px gray;'><tr style='background-color:green;'><th>Name</th><th>Email</th><th>Subject</th><th>Mesage</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='border-top:solid 2px green;'><td style='padding:5px;border-right:solid 5px green;'>" . $row["name"]. "</td><td style='padding:5px;border-right:solid 5px green;'>" . $row["email"]. "</td><td style='padding:5px;border-right:solid 5px green;'>". $row["subject"]. "</td><td>". $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
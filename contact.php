<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Thank you for contacting</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $content = $_POST["message"];
    
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

    $stmt = $conn->prepare("INSERT INTO myfolio_messages (name, email, subject,message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $content);
    $stmt->execute();
    $message = "Thanks <b>$name</b>, your message has been sent successfully. I will get intouch with you as soon as possible.  <br> <a href='contact.html'>Back to contact form</a>";
    $stmt->close();
    $conn->close();
    
    echo "$message";
    exit();
}else{
    echo "Your Message was <b>not sent</b> due to unknown error! <br> Please go back to the  <a href='contact.html'>contact form</a> and send the message again or use my email <b> <a href='mailto:francismugambi97@gmail.com'>francismugambi97@gmail.com</a></b>. ";
}

?>


</body>

</html>
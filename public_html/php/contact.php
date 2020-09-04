<?php
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$conn = new mysqli('localhost', 'webuser', 'pWrqVPDet*O]', 'arora_contact_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO website_contact_form (first, last, email, comments) VALUES ('$first', '$last', '$email', '$comments')";

if ($conn->query($sql) === TRUE) {
    header('location: ../contact');
} else {
    header('location: ../contact');
}
$conn->close();
?>

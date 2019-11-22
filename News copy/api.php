<?php 

$conn = new mysqli('localhost', 'root', '', 'youtube');

if($conn->connect_error) {
  die('Could not connect to the database');
}

$response['error'] = false;

$plainText = $_POST['plainText'];
$password = $_POST['password'];
$email = $_POST['email'];
$date = $_POST['date'];

$insertQuery = $conn->query("INSERT INTO bootstrapvue (plainText, password, email, date) VALUES ('$plainText', '$password', '$email', '$date')");

if ($insertQuery) {
  $response['message'] = 'New record inserted sucessfully';
} else {
  $response['error'] = true;
  $response['message'] = $conn->error;
}

$conn->close();
header('content-type: app/json');
echo json_encode($response);
die();
?>
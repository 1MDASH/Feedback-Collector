<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("DB error");
}

$input = json_decode(file_get_contents("php://input"), true);

$name = $input["name"];
$email = $input["email"];
$phone = $input["phone"];
$message = $input["message"];

$sql = "INSERT INTO feedbacks (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if ($conn->query($sql)) {
    echo "ok";
} else {
    echo "error";
}

$conn->close();
?>
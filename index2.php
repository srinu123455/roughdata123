<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "colleges";

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection


if (!$conn) {
die("connect failed:".$conn->connect_error);
}

else
{
  $stmt = $conn->prepare("insert into student(student_name, student_email, student_contact, student_address) values (?,?,?,?)");
  $stmt->bind_param("ssss",$name, $email, $contact, $address);
  $stmt->execute();
  $stmt->store_result();
  echo"registration success";

  $stmt->close();
  $conn->close();
}

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpproject";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
//$education = $_POST['education'];
/*$i=0;
if(!empty($_POST['education'])) {
    foreach($_POST['education'] as $check) {
     $i++;

    if(sizeof($_POST['education']) > $i) {
        echo $check . "<br> ";
    } 
    else {
        echo $check;
    }
}}*/
$checkbox1=$_POST['education'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.","; 
      echo $chk ;
   }  

$city = $_POST['city'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection


if (!$conn) {
die("connect failed:".$conn->connect_error);
}

else
{
  $stmt = $conn->prepare("insert into phpproject(name, age, gender, address,education,city) values (?,?,?,?,?,?)");
  $stmt->bind_param("sissss",$name, $age, $gender,$address, $chk,$city);
  $stmt->execute();
  $stmt->store_result();
  echo"registration successfull";

  $stmt->close();
  $conn->close();
}
?>











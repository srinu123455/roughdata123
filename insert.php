<?php
//$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
//$db = mysql_select_db("colleges", $connection); // Selecting Database from Server
//if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$id  = $_POST['id'];
//if($name !=''||$email !=''){
//Insert Query of SQL
$conn =new mysqli("localhost", "root", "","colleges");
if($conn->connect_error){
	die("connect failed:".$conn->connect_error);
}else
{
	
}

//$query = mysql_query("insert into students(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
//echo "<br/><br/><span>Data Inserted successfully...!!</span>";
//}
//else{
//echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
//}
//}
//mysql_close($connection); // Closing Connection with Server
?>
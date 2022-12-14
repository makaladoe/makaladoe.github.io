<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','Residents');

// get the post records
$txtName = $_POST['txtName'];
$txtID = $_POST['txtID'];
$txtEmail = $_POST['txtEmail'];
$txtBlock = $_POST['txtBlock'];
$txtRoom = $_POST['txtRoom'];
$txtMessage= $_POST['txtMessage'];
$txtPhone = $_POST['txtPhone'];
// database insert SQL code
$sql = "INSERT INTO `Feedback` (`Name`, `ID`, `Email`, `Block`, `Room`,`Problem`,`Phone`)
 VALUES ('$txtName', '$txtID', '$txtEmail', '$txtBlock', '$txtRoom','$txtMessage','$txtPhone')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Your concern has been received,we will be doing it as soon as possible";
}

?>
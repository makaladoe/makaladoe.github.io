<?php
$con = mysqli_connect('localhost' ,'root' ,'' ,'residents');

$Name= $_POST ['Name'];
$Id = $_POST ['Id'];
$Block = $_POST ['Block'];
$Room = $_POST ['Room'];
$Code = $_POST['Code'];


$sql = "INSERT INTO  `rent` (`Names` , `ID` ,`BLOCK` ,`ROOM` ,`CODES`)  
VALUES ('$Name' , '$Id' ,'$Block' ,'$Room' ,'$Code')";

$rs =mysqli_query($con , $sql);
if ($rs) {
    echo "your payment has been received,kindly wait for a confirmation message";
}

?>
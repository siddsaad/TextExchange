<?php

$id=$_POST["T1"];
$firstname=$_POST["T2"];

$lastname=$_POST["T3"];

$email=$_POST["T4"];

$phone=$_POST["T5"];

$pw=$_POST["T6"];

$conn = new mysqli("localhost","root","root","Textbook_Exchange");

if($conn->connect_error)
{
	die("Fail to Connect Database: ". $conn->connect_error);
}

echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;//Feel free to delete this line, after testing.



//mysql_query("SET NAMES utf8");

$sqlStr="insert into Account (Username,FirstName,LastName,Email,PhoneNum,Password) ";

$sqlStr.="values('$id','$firstname','$lastname','$email',$phone,'$pw')";

//echo $sqlStr."<br>";

if($conn->query($sqlStr) === TRUE)
{
	printf("success!");
}
else
{
	echo "Error: ". $sqlStr . "<br>" . $conn->error;
}

//echo "Input Successfully!";

?>


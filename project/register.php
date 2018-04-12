<?php

$id=$_POST["T1"];

$firstname=$_POST["T2"];

$lastname=$_POST["T3"];

$email=$_POST["T4"];

$phone=$_POST["T5"];

$pw=$_POST["T6"];

$gender=$_POST["T7"];

$birthmonth=$POST["T8"];

$birthdate=$POST["T9"];

$birthyear=$POST["T10"];

$link=mysql_connect("localhost","root","1234") or die("Fail to Connect Database!");

print "Connent Successfully!";//Feel free to delete this line, after testing.

mysql_select_db("db1");

mysql_query("SET NAMES utf8");

$sqlStr="insert into tb1 (id,firstname,lastname,email,phone,pw,gender,birthmonth,birthdate,birthyear) ";

$sqlStr.="values('$id','$firstname','$lastname','$email','$phone','$pw','$gender','$birthmonth','$birthdate','$birthyear')";

echo $sqlStr."<br>";

mysql_query($sqlStr) or die("Fail to input!");

echo "Input Successfully!";

?>
<?php

$title = $_POST["title"];
$fname = $_POST["fname"];
$task_time = $_POST["task_time"];
$lname = $_POST["lname"];
$aadhar = $_POST["aadhar"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$years = $_POST["years"];
$months = $_POST["months"];
$days = $_POST["days"];
$address = $_POST["address"];
$report = $_POST["report"];
$gender = $_POST["gender"];


$conn = mysqli_connect("localhost","root","","smartlab") or die("Connection Failed");

$sql = "INSERT INTO patient(title, fname, lname, aadhar, email, mobile, years, months, p_days, p_address, report, gender, p_date) VALUES ('{$title}', '{$fname}', '{$lname}', '{$aadhar}', '{$email}', '{$mobile}', '{$years}', '{$months}', '{$days}', '{$address}', '{$report}', '{$gender}', '{$task_time}')";

if(mysqli_query($conn, $sql))
{
  echo 1;
}
else
{
  echo 0;
}


?>


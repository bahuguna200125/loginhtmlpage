<?php 

$conn = new mysqli("localhost", "amit", "amit","users");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$firstname=$_POST["fname"];
echo $firstname;
?>.
<br>
<?php
if ($_POST["fname"]=="") {
   echo "PLEASE ENTER FIRST NAME";
}
else {
  echo "VALID FIRST NAME";
}
?><br>
<?php 
$lastname=$_POST["lname"];
echo $lastname;
?><br>
<?php
if ($_POST["lname"]=="") {
    echo "PLEASE ENTER LAST NAME";
 }
 else {
   echo "VALID LAST NAME";
 }
 ?><br>
<?php 
$mail=$_POST["mail"];
echo $mail;
?><br>
<?php
if ($_POST["mail"]=="") {
    echo "PLEASE ENTER MAIL ID";
 }
 else {
   echo "VALID MAIL ID ";
 }
 ?><br>
 <?php
 $mobile_no= $_POST["phone"];
echo $mobile_no;
?><br>
<?php
if ($_POST["phone"]=="") {
    echo "PLEASE ENTER PHONE NUMBER";
 }
 else {
   echo "VALID PHONE NUMBER ";
 }
 ?><br>
<?php 
$pass= $_POST["cpass"];
echo $pass;
?><br>
<?php
if ($pass=="") {
    echo "PLEASE ENTER PASSWORD";
 }
?><br>
<?php 
$confirmpass=$_POST["conpass"];
echo $confirmpass;
?><br>
<?php
if ($confirmpass=="") {
    echo "PLEASE ENTER CONFIRM PASS";
 }
 ?><br>
 <?php
 if ($pass!=$confirmpass) {
    echo "PLEASE ENTER SAME PASSWORD";
 }
 else {
   echo "VALID PASSWORD";
 }
  $sql= "INSERT INTO user_details(`first_name` ,`last_name`, `password`, `mail_id`,`phone_no`) VALUES ('{$firstname}','{$lastname}','{$pass}','{$mail}','{$mobile_no}')";
$conn->query($sql);
?>

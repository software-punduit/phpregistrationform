<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];


$user = ['$name' , '$email' , '$dob' , 'gender' , '$country'];

$filename='./userdata.csv';
$handle=fopen($filename, 'a');
fwrite($handle, "$name, $email, $dob ,$gender,$country \n");
fclose($handle);

print_r($user);
?>


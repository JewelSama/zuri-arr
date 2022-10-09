<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$userData = [$name, $email, $dob, $gender, $country];

// $txt = implode(",", $userData); 

$handle = fopen('userdata.csv', 'a');
fputcsv($handle, $userData);
fclose($handle);



print_r($userData);
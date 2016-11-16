<?php
// This is the best way to declare a string
$first_name = 'Yovan';
$last_name = 'Juggoo';
$full_name = $first_name . ' ' . $last_name;
echo $full_name;
echo '<br>';

//This is the best way to concatenate two variables
$full_name = "$first_name $last_name";
echo $full_name;
echo '<br>';

$email = 'yovan.juggoo@gmail.com';
$subject = 'Error while submiting MRA returns';
$body = '<br> Dear Yovan, ';
$body .= '<br> Today I tried to submit my tax returns to the MRA.';
$body .= '<br> I got the error: An error has occured while processing your data. Please contact the developers.';

echo "Sent to: {$full_name}" . htmlspecialchars("<$email>") . "<br>";
echo "Subject: {$subject}";
echo "<mark>{$body}</mark>";

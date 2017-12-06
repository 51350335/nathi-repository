<?php
/// how to code for password///
$endofpassword = 'word';
$output = sprintf("Your password: %'*8s", $endofpassword);
echo $output;
?>
<br/>
<?php
$endofpassword = 'word';
$output = sprintf("Your password: %'*-8s", $endofpassword);
echo $output;
////
echo"<br/>";
$string = 'puppies';
printf("I think %s are cute.", $string);

/////
$string = '12/1/1980';
$array = sscanf($string, "%d/%d/%d");
echo '<pre>'; // For improved readability
print_r($array);

/////
$array = array( 'Hello', 'World', '!' );
$string = implode(' ', $array); // Using a space as the limiter
echo $string;

////
$explodeme = '02-01-1980';
$array = explode('-', $explodeme); // dash (-) is the delimiter
echo '<pre>'; // For easier readability
print_r($array);

$array = explode('-', $explodeme, 2); // Limit to 2 elements
print_r($array);

///
$password = 'mypassword';
echo crypt($password);
echo"<br/>";
$password = 'mypassword';
echo md5($password);

////
echo"<br/>";
$password = 'password'; // Very bad password
$salt = substr(md5(uniqid(mt_rand(), TRUE)), 0, 5); // 5 char. salt
$salted_password_hash = md5($salt . md5($password));

////

echo"<br/>";
$float = 1234567.891;
echo number_format($float);
echo $salted_password_hash; // Output varies

///
$string = 'Welcome to the jungle';
echo '<pre>'; // For easier readability
$array = str_word_count($string, 1);
print_r($array);
?>

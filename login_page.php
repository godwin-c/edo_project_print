<?php 

 // Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {

// retrieve the form data by using the element's name attributes value as key


$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// display the results
//echo 'Your Username is ' . $username;

header("Location: dashboard.html"); 

exit;
}
?>
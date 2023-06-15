<?php
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'courses';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['coursename'], $_POST['coursecode'], $_POST['coursedescription'], $_POST['department'], $_POST['semester'], $_POST['courseyear'], $_POST['instructor_name'], $_POST['results'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!,other');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['coursename']) ||empty($_POST['coursecode']) ||empty($_POST['coursedescription']) ||empty($_POST['department']) ||empty($_POST['semester']) ||empty($_POST['courseyear']) || empty($_POST['instructor_name']) || empty($_POST['results'])) {
	// One or more values are empty.
	exit('Please complete the registration form,empty');
}
if (strlen($_POST['coursedescription']) > 50 || strlen($_POST['instructor_name']) > 30) {
	exit('Description and instructors name should be less than 30 characters');
}

if ($stmt = $con->prepare('INSERT INTO coursedata (coursename, coursecode, coursedescription, department, semester, courseyear, instructor_name, results) VALUES (?, ?, ?, ?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	
	$stmt->bind_param('ssssssss',  $_POST['coursename'], $_POST['coursecode'], $_POST['coursedescription'],$_POST['department'],$_POST['semester'], $_POST['courseyear'], $_POST['instructor_name'], $_POST['results']);
	$stmt->execute();
	header ('Location: courses.php');
    $stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>
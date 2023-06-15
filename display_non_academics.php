<?php 
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "library";

$conn = new mysqli($server_name, $username, $password, $database_name); // Create connection with the database

if ($conn->connect_error) { // Check the connection to verify if its succesful
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM nonacademic_books";  //Writing query for all the students 

$result = $conn->query($sql); //Making the query and getting the data
?> 

<!DOCTYPE html> <!--The html code is for creating the table for storing the fetched data-->
<html> 
	<head> 
		<title>Non Academics Books</title> 
		<link rel="stylesheet" href="Styles/bookstable.css" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head> 
	<body> 
		<nav class="navtop">
				<div>
					<a href="landingpage.html"><i class="fas fa-home"></i>Home</a>
					<a href="aboutme.html"><i class="fas fa-user-circle"></i>About me</a>
					<a href="register.html"><i class="fas fa-sign-in"></i>Register</a>
					<a href="courses.php"><i class="fas fa-pen"></i>Courses</a>
					<a href="cv.php"><i class="fas fa-id-card"></i>Cv</a>
					<a href="communityengagement.html"><i class="fas fa-people-group"></i>Community engagement</a>
					<a href="news.html"><i class="fas fa-newspaper"></i>News</a>
					<a href="library.php"><i class="fas fa-book-open"></i>Library</a>
					<a href="contact.php"><i class="fas fa-contact-book"></i>Contacts</a>
			<a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a>
				</div>
			</nav>
		<?php 
        if ($result->num_rows > 0) { //If the database has data, 'num_rows' returns the number of rows in table
		?> 
		<div class="table-wrapper">
		<table align="center" class="fl-table" border="1px" style="width:600px; line-height:40px;"> 
		</thead>
		<tr> 
		<th colspan="5"><h2>List of my non academic books</h2></th> 
		</tr> 
		<tr>
			<th> Title </th> 
			<th> Author </th> 
			<th> Publisher </th> 
			<th> Published Year </th>	  
		</tr> 
		</thead>
		<?php //Whenever you see this just know im using php inside html so i need the compiler to know that this is php not otherwise

        while($book = $result->fetch_assoc())  //Array to output data of each row, 'fetch_assoc' fetches a result row as an associative array
		{ 
		?> <!--This is the closing tag of php-->
		<tbody>
		<tr> 
		<td><?php echo $book['title']; ?></td> 
		<td><?php echo $book['author']; ?></td> 
		<td><?php echo $book['publisher']; ?></td> 
		<td><?php echo $book['published_year']; ?></td> 
		</tr>
		</tbody> 
	<?php 
            } }else {
        echo "0 results";
    }           
$conn->close(); //This closes the connection to the database
    ?> 
		</table> 
	</body> 
</html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo 'you need to sign in ';
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
 	 <link rel="stylesheet" href="Styles/cv.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>

	<body class="loggedin">
	<nav class="navtop">
			<div class="navbar">
				
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
		
		<div class="cvtable">
			<table align="center">
				<tr>
					<td colspan="3" class="header">Curriculum Vitae</td>
				</tr>

				<tr>
					<td colspan="3" class="section-title">Personal Information</td>
				</tr>
					
				<tr>
					<td rowspan="3">
						<img src="Images/dp.jpg" style="width:140px;height:150px;">
					</td>
						
					<td colspan="2"><h1>DERECK GEORGE TANO</h1></td>
				</tr>
					
				<tr>
					<td colspan="2">Email: eridericgeorge@gmail.com</td>					</tr>
					
				<tr>
					<td colspan="2">Phone: +255 748 281 701</td>
				</tr>
					
				<tr>
					<td colspan="3" class="section-title">Education</td>
				</tr>
					
				<tr>
					<th>University/School </th>
					<th>Passing year </th>
					<th>gpa/Division</th>
				</tr>
					
				<tr>
					<td>Loyola</td>
					<td>2020</td>
					<td>1.7</td>
				</tr>
					
				<tr>
					<td>Tambaza high</td>
					<td>2022</td>
					<td>1.4</td>
				</tr>
					
				<tr>
					<td>University of Dar es Salaam</td>
					<td>2020</td>
					<td>4.5</td>
				</tr>
					
				<tr>
					<td colspan="3" class="section-title">Work Experience</td>
				</tr>
					
				<tr>
					<td>Company:</td>
					<td>ABC Corporation</td>
					<td>DEF Corporation</td>
				</tr>
					
				<tr>
					<td>Position:</td>
					<td>Software Developer</td>
					<td>Lab techncian</td>
				</tr>
				<tr>
					<td>Duration:</td>
					<td>2019-2021</td>
					<td>2021-2023</td>
				</tr>
					
				<tr>
					<td>Responsibilities:</td>
						
					<td>
					<ul>
						<li>Developed and maintained web applications</li>
						<li>Collaborated with cross-functional teams</li>
						<li>Performed code reviews and testing</li>
					</ul>
					</td>
					
					<td>
					<ul>
						<li>Developed and maintained web applications</li>
						<li>Collaborated with cross-functional teams</li>
						<li>Performed code reviews and testing</li>
					</ul>
					</td>
					</tr>
					
				<tr>
					<td colspan="3" class="section-title">Skills</td>
				</tr>
					
				<tr>
					<td><h4>Programming</h4></td>
					<td><h4>Language</h4></td>
					<td><h4>Hobbies</h4></td>
				</tr>
					
				<tr>
					<td>C/C++, Java</td>
					<td>Swahili</td>
					<td>Football</td>
				</tr>
					
				<tr>
					<td>Python</td>
					<td>English</td>
					<td>Drawing</td>
				</tr>
			</table>
		</div>
	</body>
</html>


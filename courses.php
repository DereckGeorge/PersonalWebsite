<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo 'YOU NEED TO LOGIN FIRST!';
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Styles/library_course.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
<div class="library">
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
    <div class="content">
    
    <table id="table">
        <tr>
            <td colspan="2">Select below</td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/reg.png" style="width: 50%;" />
                    <p></p>
                   <a href="coursereg.html"> <button class="btn btn1">Register</button></a>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="Images/show.png" style="width: 50%; height: 85%" />
                <p></p>
                <a href="coursesdata.php"><button class="btn btn2">Show</button></a>
                <br /><br />
                </div>
            </td>
    </table>
        </div>
        </div>
</body>

</html>
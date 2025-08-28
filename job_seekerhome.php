<?php
session_start();

// Check if not logged in OR if the user is an employer
if (!isset($_SESSION['username']) || $_SESSION['employer_flag'] == 1) {
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/jobseeker.css" rel="stylesheet"/>
</head>
<body>
        <section id="header">
           <div class="header-title">JOB SEEKER DASHBOARD</div>
		   <div class="logout">
		       <a href="logout.php">Logout</a>
		   </div>
        </section>
		<aside>
		    <ul>
			    <li>
				    <a href="job_seekerhome.php">Home</a>
				</li>
				 <li>
				    <a href="job_seekerprofile.php">Profile</a>
				</li>
				 <li>
				    <a href="">Find Jobs</a>
				</li>
				 <li>
				    <a href="">Job Application</a>
				</li>
				<li>
				    <a href="">ContactUs</a>
				</li>
			</ul>
		</aside>
		<div class="title">
		<h1>Welcome to Job Hub!</h1>
		<p class="content">
		Hello,future success story!Your career adventure begins here.
		Explore opportunities tailored to your skills, save jobs that inspire you, 
		& take the next step towards your professional goals.
		</p>
		
		</div>

</body>
</html>
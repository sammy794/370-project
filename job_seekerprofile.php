<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['employer_flag'] == 1) {
    header("location: index.php");
    exit();
}

$host="localhost";
$user="root";
$password="";
$db="job_platform";

$data=mysqli_connect($host,$user,$password,$db);
$name=$_SESSION['username'];
$sql="SELECT * FROM user WHERE username='$name'";
$result=mysqli_query($data,$sql);
$info=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Profile</title>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/jobseeker.css" rel="stylesheet"/>
</head>
<body>
        <section id="header">
           <div class="header-title">PROFILE</div>
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
		<div class="content2">
		   <center>
		      <h1 style="text-align:center;color:white;"> Update Profile</h1>
			  <br><br>
		   <form>
		      <div class="div_deg">
			  <div>
			    <label>FirstName</label>
			    <input type="text" name="fname">
				value="<?php echo "{$info['fname']}" ?>">
			  </div>
			  <div>
			    <label>LastName</label>
			    <input type="text" name="lame">
			  </div>
			  <div>
			    <label>Password</label>
			    <input type="text" name="password">
			  </div>
			  <div>
			    <label>Saved Jobs</label>
			    <input type="text" name="saved_jobs">
			  </div>
			  <div>
			    <label>Skill</label>
			    <input type="text" name="skill">
		      </div>
			  <div>
			    <label>Experience</label>
			    <input type="text" name="experience">
			  </div>
			  <div>
			    <label>Resume</label>
			    <input type="file" name="resume">
			  </div>
			  <div>
			    <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
			  </div>
		   </div>
		   </form>
		   </center>
		   
		</div>
		
</body>
</html>
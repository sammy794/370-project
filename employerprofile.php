<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MyProfile</title>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/employer.css" rel="stylesheet"/>
</head>
<body>
        <section id="header">
           <div class="header-title">My Profile</div>
		   <div class="logout">
		       <a href="logout.php">Logout</a>
		   </div>
        </section>
		<aside>
		    <ul>
			    <li>
				    <a href="employerhome.php">Home</a>
				</li>
				 <li>
				    <a href="employerprofile.php">My Profile</a>
				</li>
				 <li>
				    <a href="modify_JS_Pro.php">Job Seeker Profile</a>
				</li>
				 <li>
				    <a href="">Post Job</a>
				</li>
			</ul>
		</aside>
		<div class="content2">
		  <h1 class="form-title"> Update Profile</h1>
		   <form>
		      <div class="div_deg">
			  <div>
			    <label>FirstName</label>
			    <input type="text" name="fname">
			  </div>
			  <div>
			    <label>LastName</label>
			    <input type="text" name="lame">
			  </div>
			  <div>
			    <label>Email</label>
				<input type="email" name="email">
			  </div>
			  <div>
			    <label>Password</label>
			    <input type="text" name="password">
			  </div>
			  <div>
			    <input type="submit" class="btn btn-primary" name="update_profile" value="Update Profile">
			  </div>
		   
		   </form>	   
		</div>
		
</body>
</html>
		
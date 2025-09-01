<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> RegistrationForm </title>
    
      
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
	  <style>
         .form-section {
            display: none; 
         }
         .form-section.active {
            display: block; 
         }
      </style>

</head>
<body>
    <div class="registration-form">
       <h1>Registration form</h1>
	   <p>Select your role:</p>
       <select id="roleSelect" onchange="showForm()">
         <option value="">-- Choose --</option>
         <option value="jobseeker">Job Seeker</option>
         <option value="employer">Employer</option>
       </select>
	   
	   
	   <div id="jobseekerForm" class="form-section">
          <h2>Job Seeker Registration</h2>
          <form action="register_jobseeker.php" method="POST">
             <p>Username:</p>
             <input type="text" name="username" required>
             <p>First Name:</p>
             <input type="text" name="fname" required>
             <p>Last Name:</p>
             <input type="text" name="lname" required>
             <p>Email:</p>
             <input type="email" name="email" required>
             <p>Password:</p>
             <input type="password" name="password" required>
             <p>Skills:</p>
             <input type="text" name="skills" 
			 <p>Experience:</p>
             <input type="text" name="experience" 
             <br><br>
             <input type="submit" value="Register">
          </form>
       </div>
	   
	   <div id="employerForm" class="form-section">
          <h2>Employer Registration</h2>
          <form action="register_employer.php" method="POST">
		    <p>Username:</p>
            <input type="text" name="username" required>
            <p>First Name:</p>
            <input type="text" name="fname" required>
            <p>Last Name:</p>
            <input type="text" name="lname" required>
            <p>Email:</p>
            <input type="email" name="email" required>
            <p>Password:</p>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="Register">
          </form>
       </div>
    </div>
	<script>
      function showForm() {
        let role = document.getElementById("roleSelect").value;
        document.getElementById("jobseekerForm").classList.remove("active");
        document.getElementById("employerForm").classList.remove("active");

        if (role === "jobseeker") {
           document.getElementById("jobseekerForm").classList.add("active");
        } else if (role === "employer") {
           document.getElementById("employerForm").classList.add("active");
        }
      }
    </script>
 
</body>
</html>
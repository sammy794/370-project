<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="job_platform";

$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM job";
$result=mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PostJob</title>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/employer.css" rel="stylesheet"/>
	<style>
    nav.menu a {
		color: white;
        background-color: black;    
        text-decoration: none;
		padding: 10px 20px;
        border-radius: 5px;
		text-align:center
    }
	nav.menu a:hover {
       background-color: #333 !important;
       text-decoration: none !important;
	   text-align:center
    }
    </style>

</head>
<body>
        <section id="header">
           <div class="header-title">Post Job</div>
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
				    <a href="postjob.php">Post Job</a>
				</li>
			</ul>
		</aside>
		<div class="content">
		     <h1 class="form-title">View Job Details</h1>
			 <nav class="menu">
                <a href="addjob.php">Add New Jobs</a>
			 </nav>
		</div>
		<?php
		    if($_SESSION['message'])
			{
				echo $_SESSION['message'];
			}
			unset($_SESSION['message']);
		?>
		<div class="content2">
		     <center>
			 <table border="1px">
			    <tr>
				   <th class="table_th">JobID</th>
				   <th class="table_th">UserID</th>
				   <th class="table_th">JobTitle</th>
				   <th class="table_th">Requirements</th>
				   <th class="table_th">Update</th>
				   <th class="table_th">Delete</th>
				</tr>
				<?php
			    while($info=$result->fetch_assoc())
			    {
			    ?>
				
				<tr>
				   <td class="table_td">
				       <?php echo "{$info['id']}"; ?>
				   </td>
				   <td class="table_td">
				       <?php echo "{$info['user_id']}"; ?>
				   </td>
				   <td class="table_td">
				       <?php echo "{$info['title']}"; ?>
				   </td>
				   <td class="table_td">
				       <?php echo "{$info['requirement']}"; ?>
				   </td>
				   <td class="table_td">
			  <?php 
			  
			  echo "<a onClick=\" javascript:return confirm('Are you sure you want to delete this job?');\"class='btn btn-danger' href='delete.php?job_id={$info['id']}'>Delete</a>"; 
			  ?>
				   </td>
				   <td class="table_td">
				       <?php echo "<a class='btn btn-primary' href='updatejob.php?job_id={$info['id']}'>Update</a>"; ?>
				   </td>
				   
				   
				   
				</tr>
				<?php
			  
			    }
			  
			    ?>
			 </table>
			 </center>
		</div>
    
				
		
</body>
</html>
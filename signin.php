<?php
$host="localhost";
$user="root";
$password="";
$db="job_platform";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}

    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=$_POST['username'];
		$pass=$_POST['password'];
		
		$sql="select * from user where username='".$name."' AND password='".$pass."' ";
		
		$result=mysqli_query($data,$sql);
		$row=mysqli_fetch_array($result);
		
		
		if($row["employer_flag"]==1)
        {
			header("location:employerhome.php");
			exist;
		}
		elseif($row["job_seeker_flag"]==1)
		{
			header("location:job_seekerhome.php");
			exist;
		}
		else
		{
			echo "username or password do not match";
		}
	}
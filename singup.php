<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="signup.css">
	
</head>
<body>
	<a href="Home1.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
			<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
		  </svg>
		</a>
	<div class="container" id='signup-form'>
		<form name="frm2" method="post" >
			<h2>Sign Up</h2>

			<label for="uniqueid">Unique Id:</label>
			<input type="text" id="uniqueid" name="uniqueid" required>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<!-- <label for="confirm-password">Confirm Password:</label> -->
			<!-- <input type="password" id="confirm-password" name="confirm-password" required> -->
			<input type="submit" name='signup' id='signup' value="signup">
		
		</form>
	</div>
	<div class="container" id='success' style='display:none'>
	
			<h2>Sign Up</h2>
			<label for="username" style='text-align:center;'>Signup Successfull</label>
			<input type='submit' onclick='window.location.href="login.php";' value="Go to Login Now">
		
	
	</div>
</body>
</html>

<?php



$conn = new mysqli("localhost", "root", "", "dam");

if(isset($_POST['signup'])){

	if($_POST['uniqueid']==='1163'){

$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
// $conpass = $_POST['confirm-password'];


if($conn){


// echo $uname.' '.$pass.' '.$email; 
$sql = "insert into user(username, password, email) VALUES('$uname', '$pass', '$email');";

if(mysqli_query($conn,$sql)){
	echo "<script>
	document.getElementById('signup-form').style.display='none';
    document.getElementById('success').style.display='block';
	</script>";
}



}else{
	echo "failed";
}
}else{
	echo "<script>alert('Enter a valid Uniq ID');</script>";
}

}
?>

<?php

session_start();
// if(isset($_SESSION['user'])){
// 	header("Location : dashboard.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="login.css">
	
	
    
	
</head>
<body>
<a href="Home1.php">
	<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
	  </svg>
	</a>
	<div class="container">
		
		<i class="bi bi-house-fill"></i>
		<form name="loginpage" method="post" > 
			<h2>Login</h2>

			
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
         
                <input type="submit" name='submit' value="Login" >
           
			
			<p>Don't have an account? <a href="singup.php">Sign up</a></p>
		</form>
	</div>

	
</body>
</html>

<?php

$conn = new mysqli("localhost", "root", "", "dam");
if($conn){
	// echo "Successs";

}else{
	// echo "failed";
}


if(isset($_POST['submit'])){
	// echo "Form Submitted";

	$uname=$_POST['username'];
	$pass=$_POST['password'];

// echo "username is $uname and password is $pass";
$sql = "SELECT id FROM user WHERE username = '$uname' and password='$pass';";
// echo $sql;

$result = mysqli_query($conn,$sql);

// if($result){
// 	echo "Records Fethced";
// }else{
// 	echo "Not Fetched";
// }

$row = mysqli_fetch_assoc($result);

if(isset($row['id'])){
	echo 'Login Success';
	$_SESSION['user']=$uname;

	header("Location: DASH/home.php");
}else{
	echo '<script>alert("Invalid Username or Password")</script>';
}

}



?>











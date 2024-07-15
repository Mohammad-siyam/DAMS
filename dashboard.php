<?php

session_start();

if(isset($_SESSION['user'])){
   
}else{
    header("Loction: login.php");
}


?>

<h1>

This is Secret Page (Dashboard)
<br>
<a href='logout.php'>Logout</a>
</h1>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="booking.css">

    <title>Document</title>
</head>

<body>
    <div class="row py-3">
        <div class="col">
        <?php include("nav1.php");?>

            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
                <a href="Home.php" class="Navbar-brand"> Home </a>
                <ul class="navbar-nav">

                    <li class="nav-item"> <a href="about.php" class="nav-link"> About </a></li>
                    <li class="nav-item"> <a href="checkappoi.php" class="nav-link">Check Appointments</a></li>
                    <li class="nav-item"> <a href="booking.php" class="nav-link">Booking</a></li>
                    <li class="nav-item"> <a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"> <a href="login.php" class="nav-link">Doctor</a></li>
                </ul>

            </nav> -->
        </div>
    </div>
    <div class="container">
        <h2> Book an Apppointment </h2>
        <div>
            <div>

                <form name="bookingpage" method="post">
                    
                    <div class="row">
                    

                            <input type="text" id="username" name="username" required placeholder="Enter Full Name">
                            <input type="text" id="Number" name="number" required placeholder="Enter Phone Number">
                            <input type="text" id="Email" name="email" required placeholder="Enter Email Adress">
                            
                            <input type="date" id="date" name="date" required><br>
                            <input type="text" id="Email" name="age" required placeholder="Enter your age">
                           
                        </div>
                    </div>
             
                    <label for="Doctors"><b>Select Doctor:</b></label>
                    <select id="Doctors" name="doctor">
                        <?php
                        include('db.php');
                        $sql="SELECT username FROM user ;";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<option value='".$row['username']."'>".$row['username']."</option>";

                        }
                    


                        ?>
                        
                     
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="Disease" id="l2"><b>Select Disease:</b></label>
                <select id="Disease" name="disease">
                    <option value="Fever">Fever</option>
                    <option value="Cold">Cold</option>
                    <option value="Cancer">Cancer</option>
                    <option value="Dibeties">Dibeties</option>
                    <option value="other">Other</option>

                </select>

                    <input type="submit" name='submit' value="Submit" id="Submit1" class="first">
                 
                </form>

               
            </div>
                          
        </div>
    </div>
     
</body>

</html>

<?php 

if(isset($_POST['submit'])){

    extract($_POST);

    $sql = "INSERT INTO booking(username , number, email, date, doctor, age, disease, status) values ( '$username', '$number', '$email',  '$date', '$doctor', '$age', '$disease', 'pending');";
echo $sql;
    include('db.php');

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Appoinment registered successfully and your Appointemnt ID is ".mysqli_insert_id($conn)."')</script>";
    }


}



?>
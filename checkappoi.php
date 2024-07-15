<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="checkappoi.css">
    <!-- <script src="tailwind.config.js"></script> -->

    <title>Document</title>
</head>

<body>
    <div class="row py-3">
		<div class="col">
			<?php include("nav1.php");?>
		</div>
	</div>
    <form name="checkappointment" action="" method="post">
        <div class="container">

            <h1>Search Appointment History by Appointment Number/Name/Mobile No</h1><br>
            <input type="text" id="Appointment" name="search" placeholder="Appointment No/Name/Mobile No.">
            <br><br><br>
            <input type="submit" name ='submit' value="Check"><br><br>
            
            <h2 class="timing"> Timing </h2><br>
            <p>
                10:30 am to 7:30 pm
            </p></form>

            <style>
      /* Apply styles to the table */
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      /* Apply styles to the table header */
      th {
        background-color: #333;
        color: white;
        text-align: left;
        padding: 8px;
      }
      
      /* Apply styles to the table cells */
      td {
        border: 1px solid #ddd;
        padding: 8px;
      }
      
      /* Apply alternate background color to table rows */
      tr:nth-child(even) {
        background-color: white;
      }
    </style>

<table style='border:solid black'>
    
 
<tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Date</th>
        <th>Doctor</th>
        <th>Status</th>
      </tr>
            <?php 

if(isset($_POST['submit'])){

    $search = $_POST['search'];

    $sql = "SELECT * FROM booking WHERE username = '$search' OR number = '$search' OR id = '$search';";
    // echo $sql;
    include('db.php');
    $result = mysqli_query($conn, $sql);


 

    while($row = mysqli_fetch_assoc($result)){
        extract($row);
        echo "  <tr>
        <th style = 'background: white; color:#333;'>$id</th>
        <th style = 'background: white; color:#333;'>$username</th>
        <th style = 'background: white; color:#333;'>$number</th>
        <th style = 'background: white; color:#333;'>$email</th>
        <th style = 'background: white; color:#333;'>$date</th>
        <th style = 'background: white; color:#333;'>".ucfirst($doctor)."</th>
        <th style = 'background: white; color:#333;'>".ucfirst($status)."</th>
      </tr>";
    }


}

?>
           
    </table>
 
        </div>
   
</body>

</html>   


<?php
  // Define the database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = " ";
  $dbname = "dam";
  
  // Create a connection to the database
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // Check the connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>



<?php
  // Include the database connection file
//   require_once('db_connection.php');

  
  // Retrieve the list of doctors from the database
  $query = "SELECT * FROM doctors";
  $result = mysqli_query($conn, $query);
  
  // Retrieve the list of appointments from the database
  $query = "SELECT * FROM appointments";
  $result2 = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Doctor Appointment Management Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    
  <div class="container">
    <h2>Doctor Appointment Management Dashboard</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Doctors</h3>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
            <?php
              // Loop through the list of doctors and display them in a table
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <h3>Appointments</h3>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Doctor Name</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
              // Loop through the list of appointments and display them in a table
              while ($row = mysqli_fetch_assoc($result2)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['patient_name']."</td>";
                echo "<td>".$row['doctor_name']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>

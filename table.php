<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="table.css"> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="table2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
   <link rel="stylesheet" href="nav.css">
  <title>Document</title>
</head>

<body>
<header>
        <div class="logo">
            <p>godavari college of engineering , jalagon</p>
        </div>
        <nav>
            <ul>
                <li><a href="table.php">Home</a></li>
                <li><a href="search.php">search </a></li>
                <li><a href="table.php">table</a></li>
               
            </ul>
        </nav>
</header>

  <table class="content-table">
    <thead>
      <tr>
        <th>fulname</th>
        <th>date</th>
        <th>m_no</th>
        <th>address</th>
        <th>purpose</th>
        <th> companion</th>
      </tr>
    </thead>
   
    <?php
                      $conn = mysqli_connect("localhost", "root", "", "mysql");
                      // Check connection
                      if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                      }
                      $sql = "SELECT fulname,date,m_no,address,purpose,companion FROM entry";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["fulname"]. "</td><td>" . $row["date"] . "</td><td>"  . $row["m_no"] . "</td><td>". $row["address"] . "</td><td>" . $row["purpose"] .
                       "</td><td>"
                      . $row["companion"]. "</td></tr>";
                      }
                      echo "</table>";
                      } else { echo "0 results"; }
                      $conn->close();
?>

   
  </table>
  <div class="buttons">
      <div class="backBtn">
        <i class="uil uil-navigator"></i>
        <a href="logout.php" class="btn btn-dark">Logout</a>
      </div>
    </div>
</body>

</html>
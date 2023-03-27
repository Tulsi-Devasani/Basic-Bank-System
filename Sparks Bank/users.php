<!doctype html>
<html lang="en">
  <head>

    <title>Basic Banking System</title>
  </head>
<style>
.text-block
{
    position: absolute;
   text-align: center;
   top:  45%;
   left: 5%;
   color: antiquewhite;
   }
   table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		}

	td, th {
		border: 2px solid #000000;
		text-align: center;
		padding: 7px;
		}

	tr:nth-child(even) {
		background-color: #b3c6ff;
	}
	button{
		background-color:#000000;
	}
</style>
  <body bgcolor="#F0F8FF">
  
      <div class="container-fluid">
        <!-- navbar -->     
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto" align="right">
              <a class="nav-link" href="Home.html">Home|</a>
                
                <a class="nav-link" href="users.php">Transaction History|</a>
                <a class="nav-link" href="transfermoney.php">Transfer Money</a></ul>
            </div>
         </nav>
  
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-10 col-md">
                <div class="heading text-center my-5">
                  <h3>Sparks Foundation</h3>
                </div>
              </div>
            </div>
        </div>
        <hr width=100%>

<form method="get" action="transfermoney.php"></form>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM  users";
$result = $conn->query($sql);
echo "<center><b><u><h2>Customer List</h2></b></u></center><br>";
if ($result->num_rows > 0) {
  echo "<table><tr><th>Account No.</th> <th>Name</th> <th>Email</th> <th>Current balance</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    echo "<tr><td name='t1'>".$row["acc_no"]."</td><td>".$row["Name"]."</td><td> ".$row["email"]."</td><td> ".$row["balance"];
	//"</td><td><u><a href='transfer_money.php'>Transfer Money</a></u></td></tr>";
	//echo"<td><button name='transfer'><a href='transfer_money.php' style='color:#ffffff'>transfer_money</a></button></td>";
	//ss$regval=$row['account_no'];
	//$_SESSION['transfer']=$regval;
  }
  echo "</table>";
} else {
  echo "0 results";
}


$conn->close();
?>
<hr width=100%>   
      </div>
      <footer class="text-center mt-5 py-2">
      <p> <center><u>Presented By: </u><b>TULSI DEVASANI</b></p>
       <p>The Sparks Foundation</center></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

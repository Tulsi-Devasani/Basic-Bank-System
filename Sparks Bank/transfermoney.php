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
   <style>
  
  body, html {
   height: 100%;
  }

  * {
    box-sizing: border-box;
  }

  .bg-img {
    /* The image used */
  background-image: url("C:\xampp\htdocs\internship_project\FlexStart\assets\img\bg-t1.jpg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  } 
  
  .container {
  position: center;
  margin: 40px;
  left: 50px;
  right: 80px;
  align: center;
  max-width: 800px;
  padding: 20px;
  background-color: white;
 }
  input[type=text]{
	  width:30%;
	  height:100%;
	  font-size:16px;
	  outline: 3px solid transparent;
	  border: none;
	  border-bottom: 2px solid blue;
  }
  
  button{
	  width:20%;
	  background-color: #800000;
	  border: none;
	  color: white;
	  padding: 16px 32px;
	  text-decoration: none;
	  margin: 4px 2px;
	  cursor: pointer;
	  border-radius:30px;
  }
  .label {
  color: green;
    font-size: 25px;
  padding: 8px;
  }
  
  .column {
  float: left;
  width: 50%;
  }

/* Clear floats after the columns */
.row:after {
	display:flex;
  }
  </style>
</style>
  <body bgcolor="D5D6EA">
  
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
                <a href="https://www.thesparksfoundationsingapore.org/"></a><h3>Sparks Foundation</h3>
                </div>
              </div>
              
            </div>
            <hr width=100%>
            <form class="container" method="POST" action="success.php">
              <br><br><br><br><br>
              
              <u><span class="label transaction">Make Transaction</span><br><br><br></u>
              <input type="text" id="sender_acc" name="sender_acc" placeholder="Sender account number"><br><br><br>
              <input type="text" id="receiver_acc" name="receiver_acc" placeholder="Receiver account number"><br><br><br>
              <input type="text" id="amount" name="amount" placeholder="Amount"><br><br><br>
              <button id="customer"><a href="users.php" style="color:#ffffff">Transactions</a></button>
              <button id="tranfer">Transfer</button><br><br><br>
             
              </div>
              
              </form>
              

      <!-- Activity section -->
           
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
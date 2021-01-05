<?php
require '../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Staff Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
    <style>
      * {
        box-sizing: border-box;
      }

      /* Style the body */
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      /* Header/logo Title */
      .header {
        padding: 80px;
        background-position: center;
        background-image: url("car.png"); 
        background-size: cotain;
        background-repeat: no-repeat;
      }

      /* Increase the font size of the heading */
      .header h1 {
        font-size: 40px;
      }

      /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
      .navbar {
        overflow: hidden;
        background-color: #333;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
      }

      /* Style the navigation bar links */
      .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
      }

      /* Right-aligned link */
      .navbar a.right {
        float: right;
      }

      /* Change color on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Active/current link */
      .navbar a.active {
        background-color: #666;
        color: white;
      }

      /* Column container */
      .row {  
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
      }

      /* Create two unequal columns that sits next to each other */
      /* Sidebar/left column */
      .side {
        -ms-flex: 20%; /* IE10 */
        flex: 20%;
        background-image: url("blue.jpg"); 
        padding: 20px;
      }

      /* Main column */
      .main {   
        -ms-flex: 80%; /* IE10 */
        flex: 80%;
        background-image: url("1.jpg"); 
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px;
      }

      /* Fake image, just for this example */
      .fakeimg {
        background-image: url("icon.jpg");
        background-repeat: no-repeat;
		background-size: cover;
        width: 100%;
        padding: 20px;
      }

      /* Footer */
      .footer {
        padding: 3px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      /* Text */
      .text{
      text-align:left;
      }

      /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 700px) {
        .row {   
          flex-direction: column;
        }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
        .navbar a {
          float: none;
          width: 100%;
        }
      }

      /* PAGE2 */
      /* Footer2 */
      .footer2 {
        padding: 1px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }

      .container {
        padding: 0 16px;
      }

      .container::after, .row2::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 5px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
   
 <div data-role="page" id="page1">
<div class="header">
  <h1></h1>
  
</div>

<div class="navbar">
  <a href="#page1" >Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Customer Booking Details</a>
  <a href="#page4">Car Updates</a>
  <a href="#page5">Availability</a>
  <a href="#page6" class="right" onclick="logout()">LogOut</a>
</div>

<div class="row">
  <div class="side">
   <div id="clockbox" style="font:12pt verdana; color:#FAF0E6;"></div>
    <h2>Staff</h2>
 
    <div class="fakeimg" style="height:250px;"></div>
    <p>We are ready to give our best...</p>
    <h3>Be Positive</h3>
    <p>The expert in everything was once in beginner</p>
  </div>
  <script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" <br> "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
  <div class="main">
  <center>
		<h1>WELCOME STAFF</H1>
	</center>
	
   
    <h1><b>Objectives</b></h1>
    <h5><b>We Are Not</b><br></h5>
	<h3><b>  A TEAM  </b><br></h3>
	<h5><b>Because We <br>
	    Work Together.</b><br></h5>
	<h3><b>   WE Are    </b> <br></h3>
	<h5><b>a team because </b><br></h5>
	<h3><b>   WE RESPECT,</b> <br></h3>
	<h5><b>TRUST, AND CARE <br>
		For each others</b></h5>
		
  </div>
</div>

<div class="footer">
  <h2>FF_Car_Rental.com</h2>
</div>

</div>

    <div data-role="page" id="page2">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
      <a href="#page1" >Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">View Customer Booking Details</a>
  <a href="#page4">Car Updates</a>
  <a href="#page5">Availability</a>
  <a href="#page6" class="right" onclick="logout()">LogOut</a>
      </div>

      <h2>CAR MENU</h2>

      <center>
      
      </center>
      <br>

      <?php
      $sql="SELECT * FROM car";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>

      <div class="row2">
        <div class="column">
          <div class="card">
            <img src="../<?php echo $row->carpicture; ?>" style="width:100%">
            <div class="container">
              <h2><?php echo $row->carname; ?></h2>
              <p class="title"><?php echo $row->carbrand; ?></p>
              <p>Rent Price:</p>
              <p>RM <?php echo $row->priceperhour; ?> per hour<br>
              RM <?php echo $row->priceperday; ?> per day<br>
              RM <?php echo $row->priceperweek; ?> per week</p>
            

            </div>
          </div>
        </div>
      </div>

      <?php
      }
      ?>

      <div class="footer2">
        <h2>FF_Car_Rental.com</h2>
      </div>
    </div>

<div data-role="page" id="page3">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
  <a href="#page1" >Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Customer Booking Details</a>
  <a href="#page4">Car Updates</a>
  <a href="#page5">Availability</a>
  <a href="#page6" class="right" onclick="logout()">LogOut</a>
</div>


  <h2><b>CUSTOMER BOOKING DETAILS</b></h2><br>
  <div class="row2">
        <div class="column">
     
            
			 <table border="1" width="300%">
						 <input type="hidden" name="idbooking" value="<?php echo $row->idbooking; ?>">
						 
						 
						  <th>FULL NAME</th>
						  <th>AGE</th>
						  <th>IDENTIFICATION NUMBER</th>
						  <th>CUSTOMER ADDRESS</th>
						  <th>CONTACT NUMBER</th>
						  <th>LICENSE TYPE</th>
						  <th>CHOSEN CAR NAME</th>
						  <th>BOOKING DATE</th>
						  <th>RETURNING DATE</th>
						  <th>DESTINATION</th>
						  <th> EMAIL</th>
		 <?php
      $sql="SELECT * FROM booking t1 JOIN customer t2 ON t1.idCustomer=t2.idCustomer
	  JOIN  car t3 ON t1.idCar=t3.idCar ";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
						  <tr>
						  <td><?php echo $row->fullname; ?></td>
						  <td><?php echo $row->age; ?></td>
						  <td><?php echo $row->icnum; ?></td>
						  <td><?php echo $row->caddress; ?></td>
						  <td><?php echo $row->contactnumber; ?></td>
						  <td><?php echo $row->licensetype; ?></td>
						  <td><?php echo $row->carname; ?></td>
						  <td> <?php echo $row->bookingdate; ?></td>
						  <td><?php echo $row->returndate; ?></td>
						  <td><?php echo $row->goingto; ?></td>
						  <td><?php echo $row->email; ?></td><br>
						  </tr>
						  
		

      <?php
      }
      ?>
	  	</table>	 
				  </div>
           
        </div>
      </div>



<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>

<div data-role="page" id="page4">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
   <a href="#page1" >Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">View Customer Booking Details</a>
  <a href="#page4">Car Updates</a>
  <a href="#page5">Availability</a>
  <a href="#page6" class="right" onclick="logout()">LogOut</a>
</div>
<h2>CAR UPDATES</h2>
      
      <form enctype="multipart/form-data" action="simpanstaff.php" method="post" data-ajax="false">
        <label>AVAILABILITY:</label><input id="availability" type="text" name="availability" value=""/>
		 <label>BOOKING STATUS</label><input id="bookingstatus" type="text" step="any" name="bookingstatus" value="" required/>
        <label>CAR CONDITION</label><input id="carcondition" type="text" step="any" name="carcondition" value=""required/>
        <label>CURRENT LOCATION OF CAR</label><input id="currentioc" type="text" step="any" name="currentioc" value=""required/>
		<label>AVAILABLE STAFF NAME</label><input id="staffname" type="text" name="staffname" value=""/>
		<label>CONTACT  NUMBER</label><input id="number" type="number" step="any" name="number" value=""required/>
		
        <input type="submit" value="submit" name="submit">
      </form>


 


<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>

<div data-role="page" id="page5">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
  <a href="#page1" >Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">View Customer Booking Details</a>
  <a href="#page4">Car Updates</a>
  <a href="#page5">Availability</a>
  <a href="#page6" class="right" onclick="logout()">LogOut</a>
</div>
<h2>AVAILABILITY</h2>
<br>
  <center>
      	<table border="2" width="50%">
             <tr>
			 <td bgcolor="ADD8E6"><center><a href="#page4"><h4><b>CREATE</h4></b></center></a></td>
			 </tr>
			</table>
      </center>
      <br>

      <?php
      $sql="SELECT * FROM aprroval";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>

      <div class="row2">
        <div class="column">
          <div class="card">
          
            <div class="container">
			 <input type="hidden" name="idupdate" value="<?php echo $row->idupdate; ?>">
              AVAILABILITY             :<?php echo $row->availability; ?><br>
			  BOOKING STATUS           :<?php echo $row->bookingstatus; ?><br>
			  CAR CONDITION            :<?php echo $row->carcondition; ?><br>
			  CURRENT LOCATION OF CAR  :<?php echo $row->currentioc; ?><br>
			  AVAILABLE STAFF NAME     :<?php echo $row->staffname; ?><br>
			  CONTACT NUMBER           :<?php echo $row->number; ?><br>
			 
			 <table>
			 <tr>
              <td bgcolor="green" width="15%"><input type="button" value="Edit" onclick="window.location='edit.php?idupdate=<?php echo $row->idupdate; ?>'"></td> 
              <td bgcolor="red" width="15%"><input type="button" value="Delete" onclick="padam('<?php echo $row->idupdate; ?>')"></button></td>
			  </tr>
			  </table>
            </div>
          </div>
        </div>
      </div>
	  
	  <script>
	  function padam(idupdate){
		  if (confirm('Are Sure Want To Delete?')){
			  window.location='delete.php?idupdate='+idupdate;
		  }
	  }
	  </script>

      <?php
      }
      ?>

<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>
<script>
function logout() {
 alert("HAVE A NICE DAY ! You're Logout Now");
 window.location.href = "../index.php";
}
</script>
  </body>
</html>
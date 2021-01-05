<?php
require '../conn.php';

$idCustomer = $_SESSION['idCustomer']

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Customer Page</title>
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
        background-image: url("cus.gif");
		background-size: cover;
        background-repeat: no-repeat;
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
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>

<div class="row">
  <div class="side">
  <div id="clockbox" style="font:12pt verdana; color:#FAF0E6;"></div>
    

    <div class="fakeimg" style="height:200px;"></div>
	<font color="palepink">
    LOCATION:FF CAR RENTAL SERVICE<br>
	<br>
	CATCH US<br>
	~~~~~~~~
	<br>
	KAMPUNG BEHOR PULAI<br>
	POLITEKNIK<br>
	UNIMAP<br>
	UITM<br>
	CMART ARAU<br>
	<br>
	<br>
	CONTACT US BY CALL OR EMAIL<br>
	---------------------------------------
	<br>
	01111482787<br>
	04-9860431<br>
	ffcarservice@gmail.com<br>
	</font>
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
  
		 			<?php
     $sql="SELECT * FROM booking t1 INNER JOIN customer t2 ON t1.idCustomer=t2.idCustomer
	  INNER JOIN  car t3 ON t1.idCar=t3.idCar WHERE t2.idCustomer = '$idCustomer'";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
	?>
	 <h2><font color="silver"> WELCOME <br> </font> <font color="indigo"><b><?php echo $row->fullname; ?></b></font></h2>
  <?php
	  }
      ?>
<br>
    <h3><font color="light cyan"><b>Choose Your Destination Here!</b></font></h3>
	
   <font style="Times New Roman" color="cyan">
    <h5><b>The world has become a place where there is a lot of technological development;<br> 
	where every single thing done physically has been transformed into computerized form.<br> 
    Nowadays, people’s activities have been transformed into work done by computerized systems. The system <br>
	of renting cars exist back in the previous years, were people rent cars for their personal reasons.<br>
	Car renting is essential to many peoples’ plan to travel or move from one place to another for business<br>
	purposes, tour, and visit or holidays, for these reasons Car renting is very helpful.</b></h5>
</font>	
	</center>
	 
  </div>
</div>

<div class="footer">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>
</div>

    <div data-role="page" id="page2">
      <div class="header">
        <h1></h1>
      </div>

<div class="navbar">
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
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
			  	<table border="3" width="100%">
             <tr>
			 <td bgcolor=" AntiqueWhite"><center><a href="#page3"><h5><b>Book</b></h5></center></a></td>
			 </tr>
			</table>
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
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>


<h2>BOOKINGS</h2><br>
<h2>BOOKING FORM</h2>
      
      <form enctype="multipart/form-data" action="simpan1.php" method="post" data-ajax="false">
	     
		 <input name="idCustomer" type="hidden" value= <?php echo "$idCustomer" ?> >
        
	 
		<label>CARNAME</label>


 <select name="idCar">
 <?php
      $sql="SELECT * FROM car";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
	?>
	 
	 <option value="<?php echo $row->idCar; ?> " > <?php echo $row->carname; ?> </option>
	 
   
	
      
	 
   <?php
	  }
      ?>
  
   
  
  
</select>
		<label>BOOKING DATE</label><input id="bookingdate" type="date" step="any" name="bookingdate" value="bookingdate"required/>
        <label>RETURNING DATE</label><input id="returndate" type="date" step="any" name="returndate" value="returndate"required/>
		 <label>DESTINATION TO GO</label><input id="goingto" type="text" step="any" name="goingto" value="goingto"required/>
		
        <input type="submit" value="submit" >
      </form>




<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>
<div data-role="page" id="page4">
<div class="header">
  <h1></h1>
</div>
<div class="navbar">
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>

      <h2>BOOKING DETAILS</h2>
<center>
      	<table border="2" width="50%">
             <tr>
			 <td bgcolor="483D8B"><center><a href="#page3"><h4><b>CREATE</h4></b></center></a></td>
			 </tr>
			</table>

      <br>

   

      <div class="row2">
        <div class="column">
		<center>
		 <table border="1" width="300%">
		 <input type="hidden" name="idCustomer" value="<?php echo $row->idCustomer; ?>">
		 
						<th>FULL NAME</th>
						  <th>AGE</th>
						  <th>IDENTIFICATION NUMBER</th>
						  <th>CUSTOMER ADDRESS</th>
						  <th>CONTACT NUMBER</th>
						  <th>LICENSE TYPE</th>
						  <th>CHOSEN CAR NAME</th>
						  <th>BOOKING DATE</th>
						  <th>RETURNING DATE</th>
						  <th>GOING TO</th>
						  <th> EMAIL</th>
						  <th colspan="2"> ACTION</th>
		
		   <?php
      $sql="SELECT * FROM booking t1 INNER JOIN customer t2 ON t1.idCustomer=t2.idCustomer
	  INNER JOIN  car t3 ON t1.idCar=t3.idCar WHERE t2.idCustomer = '$idCustomer'";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
        
			
            <tr>
						 
						  <td> <?php echo $row->fullname; ?></td>
						  <td><?php echo $row->age; ?></td>
						  <td><?php echo $row->icnum; ?></td>
						  <td><?php echo $row->caddress; ?></td>
						  <td><?php echo $row->contactnumber; ?></td>
						  <td><?php echo $row->licensetype; ?></td>
						  <td><?php echo $row->carname; ?></td>
						  <td> <?php echo $row->bookingdate; ?></td>
						  <td><?php echo $row->returndate; ?></td>
						  <td><?php echo $row->goingto; ?></td>
						  <td><?php echo $row->email; ?></td>
			 
           <td bgcolor="green"><input type="button" value="Edit" onclick="window.location='edit.php?idCustomer=<?php echo $row->idCustomer; ?>'"></td> 
			 
			 
              <td bgcolor="red"><input type="button" value="Delete" onclick="padam('<?php echo $row->idCustomer; ?>')"></button></td>
			  
			
			  </tr>
			   <?php
      }
      ?>
	  </table>
	  </center>

            </div>
          </div>
     
	  
	  <script>
	  function padam(idCustomer){
		  if (confirm('Are Sure Want To Delete?')){
			  window.location='delete.php?idCustomer='+idCustomer;
		  }
	  }
	  </script>

   </center>

<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>

<div data-role="page" id="page5">
<div class="header">
  <h1></h1>
</div>
<div class="navbar">
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>
      
		<h3>STAFF AND CAR AVAILABILITY</h3><br>
       <?php
      $sql="SELECT * FROM aprroval";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
      
      <div class="row2">
        <div class="column">
		<table border="2%" width="80%">
          
          
            
			 <input type="hidden" name="idupdate" value="<?php echo $row->idupdate; ?>">
			 <tr>
              <td>AVAILABILITY</td>
			  <td><?php echo $row->availability; ?></td>
			  </tr>
			  
			  <tr>
			  <td>BOOKING STATUS</td>
			  <td><?php echo $row->bookingstatus; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CAR CONDITION</td>
			  <td><?php echo $row->carcondition; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CURRENT LOCATION OF CAR</td>
			  <td><?php echo $row->currentioc; ?></td>
			  </tr>
			  
			  <tr>
			 <td> AVAILABLE STAFF NAME</td>
			 <td> <?php echo $row->staffname; ?></td>
			  </tr>
			  
			  <tr>
			  <td>CONTACT NUMBER</td>
			  <td><?php echo $row->number; ?></td>
			  </tr>
          
       
		  </table>
        </div>
      </div>
	 

      <?php
      }
      ?>

<div class="footer2">
  <h2>FF_Car_Rental.com</h2>
</div>
</div>
<div data-role="page" id="page6">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
  <a href="#page1">Home</a>
  <a href="#page2">Car Menu</a>
  <a href="#page3">Bookings</a>
  <a href="#page4">Booking Details</a>
  <a href="#page5">Staff & Car Availability</a>
  <a href="#page6">Terms And Condition</a>
  <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>

<h2>TERMS AND CONDITION</h2><br>
<center>
<img src="2.jpg"width="500" height="300"> 
<p><h4><b>
1) Customer Please Take and Return car Ontime <br>
2) Always Keep car in Good condition and clean <br>
3) In case any Emergency please contact staff first <br>
4) Please Follow the Car seat for enough person <br>
5) Follow the SOP rules (wear face mask and sanitizer)<br>
6) Make sure have proper licesen before take car
</b></h4><p>
</center>

</div>
<script>
function logout() {
 alert("HAVE A NICE DAY ! You're Logout Now");
 window.location.href = "../index.php";
}
</script>
<script>
function logout() {
 alert("HAVE A NICE DAY ! You're Logout Now");
 window.location.href = "../index.php";
}
</script>


  </body>
</html>
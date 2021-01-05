 <?php
require '../conn.php';

$idCustomer=$_GET['idCustomer'];
$sql="SELECT * FROM booking WHERE idCustomer=$idCustomer";
$row=$conn->query($sql)->fetch_object();
?>

<html lang="en">
  <head>
    <title>Edit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="admin.css" />  

  </head>
<h1>BOOKING FORM</h1><br>
      
       <form  action="kemaskini.php" method="post" data-ajax="false">
	    <input type="hidden" name="idCustomer" value="<?php echo $row->idCustomer; ?>">
        
		
		<label>BOOKING DATE</label><input id="bookingdate" type="date" step="any" name="bookingdate" value="<?php echo $row->bookingdate; ?>"required/>
        <label>RETURNING DATE</label><input id="returndate" type="date" step="any" name="returndate" value="<?php echo $row->returndate; ?>"required/>
		<label>DESTINATION TO GO</label><input id="goingto" type="text" step="any" name="goingto" value="<?php echo $row->goingto; ?>"required/>
		
		
        <input type="submit" value="submit" name="submit">
      </form>
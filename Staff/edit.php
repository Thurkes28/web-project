<?php
require '../conn.php';

$idupdate=$_GET['idupdate'];
$sql="SELECT * FROM aprroval WHERE idupdate=$idupdate";
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

<h1>CAR DETAILS/UPDATES</h1>
      
      <form enctype="multipart/form-data" action="kemaskinistaff.php" method="post" data-ajax="false">
	    <input type="hidden" name="idupdate" value="<?php echo $row->idupdate; ?>">
        <label>AVAILABILITY:</label><input id="availability" type="text" name="availability" value="<?php echo $row->availability; ?>"/>
		 <label>BOOKING STATUS</label><input id="bookingstatus" type="text" step="any" name="bookingstatus" value="<?php echo $row->bookingstatus; ?>" required/>
        <label>CAR CONDITION</label><input id="carcondition" type="text" step="any" name="carcondition" value="<?php echo $row->carcondition; ?>"required/>
        <label>CURRENT LOCATION OF CAR</label><input id="currentioc" type="text" step="any" name="currentioc" value="<?php echo $row->currentioc; ?>"required/>
		<label>AVAILABLE STAFF NAME</label><input id="staffname" type="text" name="staffname" value="<?php echo $row->staffname; ?>"/>
		<label>CONTACT  NUMBER</label><input id="number" type="number" step="any" name="number" value="<?php echo $row->number; ?>"required/>
		
        <input type="submit" value="submit" name="submit">
      </form>

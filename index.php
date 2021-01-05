<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylelogin.css" />
<link rel="stylesheet" href="header.css" />
</head>

<style>
.main {   
        background-image: url("2.jpg");
		background-repeat: no-repeat;		
        background-size: contain;
        padding: 20px;
		background-size: 250%;
      }
</style>

<body>
 
<div class="header">
  <h1></h1>
  
</div>


<div class="main">
<center>
<h1><font color="lightgoldenrodyellow"><b>BEST QUALITY CARS PROVIDED FOR YOU</b> </h1>
<h1><b>FF CAR RENTAL SERVICE<b></h1><br>
</center>

<h3>WE ARE READY TO SERVE YOU AS MUCH AS CAN</h3>
<h3>GET IN TO GRAB YOUR FAVOURITE CAR NOW FOR RENTAL</h3>
<h3>RATES SO LOW, YOU WON'T THINK TWICE</font></h3>
 
 <center>
 <div class="container mt-5" id="container">
    <div class="form-container sign-up-container mt-2">
      <form action="signup.php">
        <h1 class="font-weight-bold">Create Account</h1>
        
     <button type="submit">Create</button>
	  
      
      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="validation.php" method="post">
        <h1 class="font-weight-bold">Sign in</h1>
      
       
    <label for="username"></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <button class=".btn btn-info btn-rounded " onclick="mylogin()">Sign In</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="font-weight-bold">Good to see you!<h1>
          <p>You already have an account? <br>Sign in!</p>
          <button class="but" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="font-weight-bold">Hello Buddy,!</h1>
          <p>You don't have an account yet? Don't worry! You still can rental our car by</p>
          <button class="but" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
 <img src="3.gif"width="600" height="400"> <img src="pic6.png"width="600" height="400">
 <script>
 function myFunction() {
  alert("Account Created Successfully!!! You May Login Now");
}
 
     const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
	function padam(){
		  if (confirm('You Account Created Successfully!!!')){
			  window.location='index.php';
		  }
	  }
	   var dateTime = date+' '+time;
  
  document.getElementById("current_dateandtime").innerHTML = dateTime;

 </script>
 </div>
 </center>

<footer>
  <h3>JOIN US AND GET BEST RENTAL CAR</h3>
</footer>

</body>
</html>
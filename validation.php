<html>
<body bgcolor="red">
<center>
<font color="white" size="28">YOUR USERNAME OR PASSWORD INCORRECT</font>
</center>
</body>
</html>

<?php
require 'conn.php';

$username = $_POST['username'];
$password =$_POST['psw'];

if ($username == 'admin'){
	$sql="SELECT * FROM admin";
	$row=$conn->query($sql)->fetch_object();
	if($password==$row->password){
		$_SESSION['admin']='admin';
		header('Location:Admin/');
	}else {
		?>
		<script>
		alert('Incorrect Username and Password';
		window.location='index.php';
		</script>
		<?php
	}
} else {
	$sql="SELECT * FROM staff WHERE username = '$username'";
	$result = $conn->query($sql);
	if ($result->num_rows){
		$row=$result->fetch_object();
		if($password==$row->password){
			$_SESSION['idStaff']=$row->idStaff;
			header('Location:Staff/');
		}else {
			?>
			<script>
			alert('Incorrect Username and Password';
			window.location='index.php';
			</script>
			<?php
		}
	}else{
		$sql="SELECT * FROM customer WHERE username = '$username'";
		$result = $conn->query($sql);
		if ($result->num_rows){
			$row=$result->fetch_object();
			if($password==$row->password){
				$_SESSION['idCustomer']=$row->idCustomer;
				header('Location:Customer/');
			} else {
				?>
				<script>
				alert('Incorrect Username and Password';
				window.location='index.php';
				</script>
				<?php
			}
		} else{
			?>
			<script>
			alert('Incorrect Username and Password';
			window.location='index.php';
			</script>
			<?php
		}
	}
}


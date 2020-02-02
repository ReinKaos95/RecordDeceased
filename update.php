<?php 

require_once 'conect.php';
$obj= new connect();
$conector=$obj->connection();
$id=$_GET['id'];
$sql="SELECT * FROM person WHERE id_person='$id'";
$result=mysqli_query($conector,$sql);
$list=mysqli_fetch_row($result);
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Obituary</title>
</head>
<header>
	<h1 align="center">Obituary and records of deceased people</h1>
</header>
<body>
	<fieldset>
		<center>
			<form action="process/update.php" method="post">
				<input type="text" hidden="" value="<?php echo $id?>" name="id">
				<label>Name</label>
		<input type="text" name="name" value="<?php echo $list[1] ?>">
		<br>
		<label>Surname</label>
		<input type="text" name="surname" value="<?php echo $list[2] ?>">
		<br>
		<label>Decease date</label>
		<input type="date" name="decease_date" value="<?php echo $list[3] ?>">
		<br>
		<label>Cause of Death</label>
		<input type="text" name="cause" value="<?php echo $list[4] ?>">
		<br>
		<button>Register</button>
		<input type="reset" value="Reset">

	</fieldset>
	</center>
	</form>
</body>
</html>
<?php 
require_once "conect.php";
require_once "functions.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Records of deceased people</title>
</head>
<header>
	<h1 align="center">Obituary and records of deceased people</h1>
</header>
<body>
	<fieldset>
		<center>
			<form action="process/insert.php" method="post">
				<label>Name</label>
		<input type="text" name="name">
		<br>
		<label>Surname</label>
		<input type="text" name="surname">
		<br>
		<label>Decease date</label>
		<input type="date" name="decease_date">
		<br>
		<label>Cause of Death</label>
		<input type="text" name="cause">
		<br>
		<button>Register</button>
		<input type="reset" value="Reset">

	</fieldset>
	</center>
				</form>
	<fieldset>
		<center>
			<label>Registered Persons</label>
			<table style="border-collapse: collapse;" border="2">
				<tr>
					<td>Name</td>
					<td>Surname</td>
					<td>Decease Date</td>
					<td>Cause of Death</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
				<?php
				$obj = new Methods();
				$sql="SELECT * FROM person";
				$data=$obj->readData($sql);
				foreach ($data as $key) {
				 ?>
				<tr>
					<td><?php echo $key['name']; ?></td>
					<td><?php echo $key['surname']; ?></td>
					<td><?php echo $key['decease_date']; ?></td>
					<td><?php echo $key['cause']; ?></td>
					<td><a href="update.php?id=<?php echo $key['id_person'] ?>">Update</a></td>
					<td><a href="process/delete.php?id=<?php echo $key['id_person'] ?>">Delete</a></td>
				</tr>
				<?php } ?>
			</table>
		</center>
	</fieldset>
</form>
</body>
</html>
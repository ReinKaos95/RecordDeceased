 <?php 
require_once "../conect.php";
require_once "../functions.php";

$name=$_POST['name'];
$surname=$_POST['surname'];
$decease_date=$_POST['decease_date'];
$cause=$_POST['cause'];
$id=$_POST['id'];

	$data=array(
			$name,
			$surname,
			$decease_date,
			$cause,
			$id
				);
$obj= new Methods();
	if($obj->updateData($data)==3){
		header("location:../index.php");
		echo "Succesfully Submitted";
	}else{
		echo "Failed to Submit";
	}

 ?>
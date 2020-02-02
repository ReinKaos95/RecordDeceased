<?php 
$id=$_GET['id'];

require_once "../conect.php";
require_once "../functions.php";

$obj= new Methods();
	if($obj->deleteData($id)==3){
		header("location:../index.php");
		echo "Succesfully Submitted";
	}else{
		echo "Failed to Submit";
	}

 ?>
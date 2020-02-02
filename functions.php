<?php 

	class Methods{
		public function readData($sql){
			$c= new connect();
			$conex=$c->connection();

			$result=mysqli_query($conex,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertData($data){
			$c= new connect();
			$conex=$c->connection();

			$sql="INSERT into person (name,surname,decease_date,cause)
							values ('$data[0]','$data[1]','$data[2]','$data[3]')";

			return $result=mysqli_query($conex,$sql);
		}
		public function updateData($data)
		{
			$c= new connect();
			$conex=$c->connection();

			$sql="UPDATE person SET name='$data[0]',
										surname='$data[1]',
										decease_date='$data[2]',
										cause='$data[3]'
								where id_person='$data[4]'";
			return $result=mysqli_query($conex,$sql);
		}
		public function deleteData($id)
		{
			$c= new connect();
			$conex=$c->connection();

			$sql="DELETE FROM person where id_person='$id'";
			return $result=mysqli_query($conex,$sql);
		}
	}
 ?>
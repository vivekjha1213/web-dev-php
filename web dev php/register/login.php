<?php  


if (isset($_POST['Email']) && isset($_POST['Password'])) {

	//echo $_POST['Email'];
	//echo $_POST['Password'];

	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	if (empty($Password) || empty($Password)) {
		header("Location:index.html");
	}else {

		$sql = "INSERT INTO  d1 (Email,Password) VALUES ('$Email', '$Password')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";

			
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {

	echo "Invalid details";
	//header("Location: index.php");
}
<?php

session_start();

include 'db_connect.php';

if(isset($_POST['_token']) && $_POST['_token'] == $_SESSION['csrf']){

	if($_POST && isset($_POST['uname']) && isset($_POST['pwd'])){
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];
		
		if( !empty($uname) && !empty($pwd)){
		//mysqli_query($con, "INSERT INTO 'users' ('username', 'password') VALUES ('$uname', '$pwd')");
		mysqli_query($con, "INSERT INTO `users` (`username`, `password`) VALUES ('$uname', '$pwd');") or die(mysqli_error());
	
		echo "<script>alert('User added!!')</script>";
		echo "<script>location.href='add_user.php'</script>";
		}else{
			echo "<script>alert('Insert Values!!')</script>";
			echo "<script>location.href='add_user.php'</script>";
		}
	}

}


?>

Github.Amila.012
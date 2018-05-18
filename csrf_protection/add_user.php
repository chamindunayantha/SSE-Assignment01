<?php 
session_start();
if(!isset($_SESSION['uname'])){	
	echo "<script>location.href='index.php'</script>";
}

$token = base64_encode(openssl_random_pseudo_bytes(32));

$_SESSION['csrf']=$token;

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<style type="text/css">
			table{
				margin-top:150px;
				border: 1px solid;
				background-color:#eee;
			}
			
			td{
				border:0px;
				padding:10px;
			}
			
			th{
				border-bottom: 1px solid;
				background-color:#ddd;
			}
			h1{
				margin-left:30px;
			}
			
		</style>
	
	</head>
	
	<body>
	<div class="Header"><h1><a href="welco.php"><img src="back.png" alt="back" width="80px" height="40px" ></a></h1>
	</div>
	
		<form action="save_user.php" method="post"><table align="center">
				<tr><th colspan="2"><h2 align="center">ADD NEW USER</h2></th></tr>
					
				<tr><td>Username :</td><td><input type="text" name="uname"></td></tr>
	
				<tr><td>Password :</td>
					<td><input type="password" name="pwd"></td>
					<input type="hidden" name="_token" value="<?php echo $token; ?>" />  </br>
				</tr>
			
				<tr><td align="right" colspan="2"><input type="submit" name="submit" value="ADD"></td></tr>
		</table></form>
	</body>
</html>


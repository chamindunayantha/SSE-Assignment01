<?php

	session_start();
	
	if(!isset($_SESSION['uname'])){	
		echo "<script>location.href='index.php'</script>";
	}
	
?>

<html>
	<head>
		<title></title>
		
		<style type="text/css">
			table{
				margin-top:150px;
				border: 1px solid;
				background-color:#eee;
				width : 500px;
			}
			
			td{
				border:0px;
				padding:10px;
				height:50px;
			}
			
			th{
				border-bottom: 1px solid;
				background-color:#ddd;
				height:100px;
			}
			
		</style>
	
	</head>
	
	<body>
		<form method="post">
		
			<table align="center" cellpadding="2" cellspacing="2" border="0">
				<tr>
					<th colspan="2"><h2 align="center"><?php echo 'Welcome '.$_SESSION['uname']; ?></h2></th>
					
				</tr>
				
				<tr>
					<td align="center" ><a href="add_user.php">Add User</a></td>
					<td align="center" ><a href="logout.php">Logout</a></td>
				</tr>
	

			</table>
		</form>
	</body>

</html>
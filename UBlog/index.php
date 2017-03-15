<?php
	include 'includes/db.php';
	//Delete róws////
	if(isset($_GET['del_id'])){
		$del_sql = "DELETE FROM comments WHERE id = '$_GET[del_id]'";
		$run_sql = mysqli_query($conn, $del_sql);

	}
?>


<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>
	
	<div class="container">
	<table class="table table-striped">
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Access</th>
		<th>Delete</th>
		<tbody>

	<?php 
		$sql = "SELECT * FROM comments";
		$run_sql = mysqli_query($conn, $sql);

		while($rows = mysqli_fetch_array($run_sql)){
			echo '
				<tr>
					<td>' .$rows['id'] . '</td>
					<td>' .$rows['name']. '</td>
					<td>' .$rows['email_address'] . '</td>
					<td>' .$rows['subject'] . '</td>					
					<td>' .$rows['gender'] . '</td>';
					$sel_country = "SELECT * FROM apps_countries WHERE country_code = '$rows[country]'";
					$run_country = mysqli_query($conn, $sel_country);
					while($c_rows = mysqli_fetch_assoc($run_country)){
						echo '<td>' .$c_rows['country_name'] . '</td>';
					}
					echo '
					<td><a class="btn btn-info btn-xs" href="detail.php?user_id='.$rows['id'].'">Access</a></td>
					<td><a class="btn btn-danger btn-xs" href="index.php?del_id='.$rows['id'].'">Delete</a></td>
				</tr>
			 ';

		}

		
	?>

		</tbody>
	</table>
	<script src="js/jquery.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>

<?php
	include 'includes/db.php';
	?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retriving Dât From Dâtbase</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	
	<div class="container">

		<?php
			if(isset($_GET['user_id'])){
				$sql = "SELECT * FROM comments WHERE id = '$_GET[user_id]'";
				$run = mysqli_query($conn, $sql);
				while ($rows = mysqli_fetch_assoc($run)) {
					echo '
						<div class="jumbotron">
							<h1>User Details</h1>
							<p>Let jest get the compelete Detals</p>
							<a href="new_form.php?edit_id='.$rows['id'].'" class="btn btn-warning">Edit '.$rows['name'].'</a>
						</div>
						<div class="row">
							<strong class="col-sm-3">Name:</strong>
							<div class="col-sm-3">'.$rows['name'].'</div>
						</div>
						<div class="row">
							<strong class="col-sm-3">Email Adress:</strong>
							<div class="col-sm-3">'.$rows['email_address'].'</div>
						</div>
						<div class="row">
							<strong class="col-sm-3">Subject:</strong>
							<div class="col-sm-3">'.$rows['subject'].'</div>
						</div>
						<div class="row">
							<strong class="col-sm-3">Gender:</strong>
							<div class="col-sm-3">'.$rows['gender'].'</div>
						</div>
						<div class="row">
							<strong class="col-sm-3">Skill:</strong>
							<div class="col-sm-3">'.$rows['skill1'].'</div>
						</div>';
						
						$sel_country = "SELECT * FROM apps_countries WHERE country_code = '$rows[country]'";
						$run_country = mysqli_query($conn, $sel_country);
						while($c_rows = mysqli_fetch_assoc($run_country)){
							echo '
							<div class="row">
							<strong class="col-sm-3">Country:</strong>
							<div class="col-sm-3">'.$c_rows['country_name'].'</div>
						</div>
							';
						}
						echo '
						<div class="row">
							<strong class="col-sm-3">Comments:</strong>
							<div class="col-sm-3">'.$rows['comments'].'</div>
						</div>
					
					 ';
					# code...
				}
			}
		?>

	</div>
	
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
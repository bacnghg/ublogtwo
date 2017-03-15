<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS System</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>
	<?php 
		include 'includes/header.php';
	?>
	<div class="container">
		<article class="row">
			<section class="col-lg-8">
				<?php
					$sel_sql = "SELECT * FROM posts WHERE id = '$_GET[post_id]'";
					$run_sql = mysqli_query($conn, $sel_sql);
					while($rows = mysqli_fetch_assoc($run_sql)){
					echo '
						<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-header">
								<h4>'.$rows['title'].'</h4>
							</div>
							<img src="'.$rows['image'].'" alt="" width="100%">
							<p>'.$rows['description'].'</p>
						</div>
					</div>
					';
					}
				?>

				
			</section>
			<?php include 'includes/sidebar.php' ?>
		</article>
	</div>
	<div style="width:50px; height:50px;"></div>
	<?php include 'includes/footer.php' ?>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
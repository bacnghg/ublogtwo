<?php include 'includes/db.php';
	if(isset($_POST['submit_contact'])){
		$date = date('Y-m-d h:i:s');
		$ins_sql = "INSERT INTO comments (name, email, subject, comment, date) VALUES ('$_POST[name]', '$_POST[email]','$_POST[subject]', '$_POST[comment]','$date' )";
		$run_sql = mysqli_query($conn, $ins_sql);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacts Us</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
				<div class="page-header">
					<h2>Contacts Us Form</h2><?php echo date('Y-m-d h:i:s'); ?>
				</div>
				<form class="form-horizontal" action="contact.php" method="post" role="form">
					<div class="form-group">
						<label for="name"  class="control-label col-sm-2">Name *</label>
						<div class="col-sm-8">
							<input type="text" id="name" class="form-control" value="" placeholder="Full Name" name="name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label col-sm-2" role="form">Email *</label>
						<div class="col-sm-8">
							<input type="email" id="email" name="email" class="form-control" value="" placeholder="Input Email Adresss" required>
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="control-label col-sm-2" role="form">Subject *</label>
						<div class="col-sm-8">
							<input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Input Subject" required>
						</div>
					</div>					
					<div class="form-group">
						<label class="control-label col-sm-2">Comments *</label>
						<div class="col-sm-8">
							<textarea cols="30" rows="10" class="form-control my-fixed" required name='comment'></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label col-sm-2"></label>
						<div class="col-sm-8">
							<input type="submit" class="btn btn-primary btn-block" value="Submit form" name="submit_contact">
						</div>
					</div>
				</form>					
			</section>
			<?php include 'includes/sidebar.php' ?>
		</article>
	</div>
	<div style="width:50px; height: 50px"></div>
	<?php include 'includes/footer.php' ?>

	
</body>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
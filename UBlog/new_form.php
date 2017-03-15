<!DOCTYPE html>
<?php include 'includes/db.php';
	if(isset($_GET['edit_id'])){
		$edit_sql = "SELECT * FROM comments WHERE id = '$_GET[edit_id]'";
		$run_sql = mysqli_query($conn, $edit_sql);
		while($rows = mysqli_fetch_assoc($run_sql)){
			$name = $rows['name'];
			$email = $rows['email_address'];
			$subject = $rows['subject'];
			
			$gender = $rows['gender'];
			$country = $rows['country'];
			$comments = $rows['comments'];

			if($gender == 'male'){
				$select_tag = '<select class="form-control" name="gender"><option value="male" selected>Male</option>
								<option value="female">Female</option></select>';
			} else{
				$select_tag = '<select class="form-control" name="gender"><option value="male"> Male</option>
								<option value="female" selected>Female</option></select>';
			}
		}
	} else{
		$name = '';
		$subject = '';
		$email = '';
		$gender = '';
		$country = '';
		$comments = '';

		$select_tag = '<select class="form-control" name="gender" required><option value="">Select your Gender</option><option value="male">Male</option><option value="female" selected>Female</option></select>';
	}
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
</head>
<body>

	<div class="container">
		<h2>Submit Form</h2>
		<form class="form-horizontal" action="form_process.php" method="post" role="form">
			<div class="form-group">
				<label for="name"  class="control-label col-sm-2">Name *</label>
				<div class="col-sm-5">
					<input type="text" id="name" class="form-control" value="<?php echo $name; ?>" placeholder="Full Name" name="name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-sm-2" role="form">Email *</label>
				<div class="col-sm-5">
					<input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Input Email Adresss" required>
				</div>
			</div>
			<div class="form-group">
				<label for="subject" class="control-label col-sm-2" role="form">Subject *</label>
				<div class="col-sm-5">
					<input type="text" id="subject" name="subject" class="form-control" value="<?php echo $subject; ?>" placeholder="Input Subject" required>
				</div>
			</div>
			<div class="form-group">
				<label for="gender" class="control-label col-sm-2" role="form">Gender</label>
				<div class="col-sm-2">
					<?php echo $select_tag; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Skill</label>
				<div class="col-sm-5">
					<label class="checkbox-inline"><input type="checkbox" name="skill1">HTML</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill2">JS</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill3">CSS</label>
					<label class="checkbox-inline"><input type="checkbox" name="skill4">PHP</label>
				</div>				
			</div>			
			<div class="form-group">
				<label for="country" class="control-label col-sm-2" role="form">Country</label>
				<div class="col-sm-2">
					<select class="form-control" name="country" required>
						<option value="">Your Country</option>
						<?php 
							$sel_countries = "SELECT * FROM apps_countries";
							$run_countries = mysqli_query($conn, $sel_countries);
							while($rows = mysqli_fetch_assoc($run_countries)){
								if($country == $rows['country_code']){
									$selected = 'selected';
								} else{
									$selected = '';
								}
								echo '<option value="' . $rows['country_code'] . '" '.$selected.'>'.$rows['country_name'].'</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Comments</label>
				<div class="col-sm-5">
					<textarea cols="30" rows="10" class="form-control my-fixed" required name='comments'><?php echo $comments; ?></textarea>
				</div>
			</div>
			<div class="form-group">
			<label for="" class="control-label col-sm-2"></label>
				<div class="col-sm-5">
					<input type="submit" class="btn btn-primary btn-block" value="Submit form" name="submit_form">
				</div>
			</div>
		</form>
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
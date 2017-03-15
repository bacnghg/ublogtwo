<?php
	
	$name = '';
	$email = '';
	$subject = '';
	$comments = "";
	$result = '';
	if(isset($_POST['validate'])){

		if(empty($_POST['name'])){
			$name = "<span style='color:red;''>The name field is empty" . " </span>";
		} else{
			$name ='<span style="color:green;">'. strip_tags($_POST['name']) . "</span>";
		}
		if(!empty($_POST['email'])){
			$email = '<span style="color:green;">'.strip_tags($_POST['email']) . "</span>";
		} else{
			$email = '<span style="color:red;">Email field is required!</span>';
		}
		if(empty($_POST['subject'])){
			$subject = '<span style="color:red;">Subjects Field is Required!</span>';
		} else{
			$subject = '<span style="color:green;">'. htmlspecialchars( $_POST['subject']) . '</span>';
		}
		$comments = '<h3>Comments </h3>'. trim(htmlspecialchars($_POST['comment']));
	} else {
		$result = "Sorry, there&apos;s no request we received!";
	}			
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Form</title>

</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td>Name *</td>
				<td><input type="text" name="name"><?php echo $name; ?></td>
			</tr>
			<tr>
				<td>Email *</td>
				<td><input type="text" name="email"><?php echo $email?></td>
			</tr>
			
			<tr>
				<td>Subjects *</td>
				<td><input type="text" name="subject"><?php echo $subject; ?></td>
			</tr>
			<tr>
				<td>Your Gender</td>
			</tr>
			<tr>
				<td>Male: <br>Female:<br>Other: </td>
				<td><input type="radio" value="male" name="gender"><br>
					<input type="radio" value="female" name="gender"><br>
					<input type="radio" value="other" name='gender'><br>
				</td>
			</tr>
			<tr>
				<td>Skills:</td>
				<td>
					<input type="checkbox" name="skills1" value="html">: HTML<br>
					<input type="checkbox" name="skills2" value="php">: PHP<br>
					<input type="checkbox" name="skills3" value="css">: CSS<br>
					<input type="checkbox" name="skills4" value="js">: JS<br>
				</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>
					<select name="country" id="">
						<option value="">Select a Country</option>
						<option value="vn">Vietnam</option>
						<option value="cn">China</option>
						<option value="sg">Singapore</option>
						<option value="ml">Malaisia</option>
						<option value="jp">Japan</option>
						<option value="tl">Thailan</option>
						<option value="usa">UAS</option>
						<option value="fr">France</option>
						<option value="uk">UK</option>
						<option value="rs">Rusia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Comments</td>
				<td><textarea name="comment"></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="validate"></td>
				<td><input type="submit" name="login_submit"></td>
			</tr>
		</table>
		<?php
			echo $comments;
			echo $result;
		?>
	</form>	
</body>
</html>


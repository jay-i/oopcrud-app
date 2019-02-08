<?php
require_once 'class.php';
	
	$fname = $lname = $dob = $email = $user_add = "";
	
	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$dob = trim($_POST['dob']);
		$email = trim($_POST['email']);
		$user_add = trim($_POST['user_add']);
		
		if(empty($fname)){
			echo "<script>alert('Please enter first name')</script>";
		}else if(empty($lname)){
			echo "<script>alert('Please enter last name')</script>";
		}else if(empty($dob)){
			echo "<script>alert('Please enter date of birth')</script>";
		}else if(empty($email)){
			echo "<script>alert('Please enter Email Address')</script>";
		}else if(empty($user_add)){
			echo "<script>alert('Please enter Address')</script>";
		}else{
		$conn = new db_class();
		$conn->create($fname, $lname, $dob, $email, $user_add);
		
		header("Location: index.php");
		}
		
	}

?>

<!Doctype html>
<html>
<head>



	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	<link rel="stylesheet" href="style.css" type="text/css">
	
</head>
<body>
	<div class="container">
		<h2>Add New Record</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<label for="firstname">First Name:</label>
			<input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="Enter First Name..."><br /><br />
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Enter Last Name..."><br /><br />
			<label for="name">Date of Birthday:</label>
			<input type="date" name="dob" value="<?php echo $dob; ?>" placeholder="Enter Location..."><br /><br />
			<label for="name">Email:</label>
			<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter email..."><br /><br />
			<label for="name">Address:</label>
			<textarea name="user_add" value="<?php echo $user_add; ?>" placeholder="Enter Address..."></textarea><br /><br />
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>
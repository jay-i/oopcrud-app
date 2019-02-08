<?php
require_once 'class.php';

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$user_add = $_POST['user_add'];
	
	$conn = new db_class();
	$conn->update($fname, $lname, $dob, $email, $user_add, $id);
	
	header("Location: index.php");
}

$id = $_GET['id'];
require_once 'class.php';
$conn = new db_class();
$row = $conn->user_id($id);


?>


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
			<input type="text" name="fname" placeholder="Enter First Name..." value="<?php echo $row['fname']; ?>"><br /><br />
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" placeholder="Enter Last Name..." value="<?php echo $row['lname']; ?>"><br /><br />
			<label for="name">Date of Birthday:</label>
			<input type="date" name="dob" placeholder="Enter Location..." value="<?php echo $row['dob']; ?>"><br /><br />
			<label for="name">Email:</label>
			<input type="email" name="email" placeholder="Enter email..." value="<?php echo $row['email']; ?>"><br /><br />
			<label for="name">Address:</label>
			<textarea name="user_add" placeholder="Enter Address..." value="<?php echo $row['user_add']; ?>"></textarea><br /><br />
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"><br /><br />
			<input type="submit" name="update" value="Update">
		</form>
	</div>
</body>
</html>
<form method="post" action="">
	
	<input type="search" name="search" placeholder="Search by first name">
	<input type="submit" value="Search">
	<a href="create.php" style="text-decoration: none; background: blue; color: white; border-radius: 5px;">Add New Records</a>
</form>
<table border=1>
	<thead>
		<tr>
			<th>Serial</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Email</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		require 'class.php';
		$conn = new db_class();
		$read = $conn->read();
		while($row = $read->fetch_array()){
	?>	
		<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['fname'];?></td>
				<td><?php echo $row['lname'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['user_add'];?></td>
				<td>
				<a href="update.php?id=<?php echo $row['id'];?>">Edit</a>
				<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
				</td>
		</tr>
		<?php
		}
	
		?>
		
	</tbody>
</table>

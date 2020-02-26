<html>
<html>
<head>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Add Users</title>
</head>
<body>
	<div class="container">
		<span class="border">
			<a href="index.php">Home</a>	
			<div class="form">
				<form action="add.php" method="post" name="form1">
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email ID</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile NO">
						</div>
					</div>	
					<input type="submit" class="btn btn-success" name="Submit" value="Add"></td>
				</form>
			</div>
		
			<?php

			// Check If form submitted, insert form data into users table.
			if(isset($_POST['Submit'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				
				// include database connection file
				include_once("config.php");
						
				// Insert user data into table
				$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
				
				// Show message when user added
				echo "User added successfully. <a href='index.php'>View Users</a>";
			}
			?>
		</span>
	</div>
</body>
</html>

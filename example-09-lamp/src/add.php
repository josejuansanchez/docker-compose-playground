<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">	
	<title>Add Data</title>
</head>

<body>
<div class="col-lg-8 mx-auto py-md-5">
	<header class="d-flex align-items-center pb-3 mb-5 border-bottom">
		<a href="/" class="text-dark text-decoration-none">
			<img src="images/code-solid.svg" width="40" height="32" class="me-2">
			<span class="fs-4">Company name</span>
		</a>
	</header>

	<main>

<?php
// including the database connection file
include_once("config.php");

if(!isset($_POST['name']) || !isset($_POST['age']) || !isset($_POST['email']) || !isset($_POST['surname1'])) {
	exit;
} 

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$surname1 = mysqli_real_escape_string($mysqli, $_POST['surname1']);
$surname2 = mysqli_real_escape_string($mysqli, $_POST['surname2']);
$age = mysqli_real_escape_string($mysqli, $_POST['age']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);

// checking empty fields
if(empty($name) || empty($age) || empty($email) || empty($surname1)) {
	if(empty($name)) {
		echo "<div class='alert alert-danger' role='alert'>Name field is empty</div>";
	}

	if(empty($surname1)) {
		echo "<div class='alert alert-danger' role='alert'>Surname1 field is empty</div>";
	}

	if(empty($age)) {
		echo "<div class='alert alert-danger' role='alert'>Age field is empty</div>";
	}

	if(empty($email)) {
		echo "<div class='alert alert-danger' role='alert'>Email field is empty</div>";
	}

	// link to the previous page
	echo "<a href='javascript:self.history.back();' class='btn btn-primary'>Go Back</a>";
} else {
	// if all the fields are filled (not empty)

	// insert data to database
	$query = "INSERT INTO users (name,surname1,surname2,age,email) VALUES('$name','$surname1','$surname2',$age,'$email')";
	$result = mysqli_query($mysqli, $query);

	/*
	$stmt = mysqli_prepare($mysqli, "INSERT INTO users (name,surname1,surname2,age,email) VALUES(?,?,?,?,?)");
	mysqli_stmt_bind_param($stmt, "sssis", $name, $surname1, $surname2, $age, $email);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);
	*/

	// display success message
	echo "<div class='alert alert-success' role='alert'>Data added successfully</div>";
	echo "<a href='index.php' class='btn btn-primary'>View Result</a>";
}

mysqli_close($mysqli);

?>
	</main>
	<footer class="pt-5 my-5 text-muted border-top">
    Created by the IES Celia team &copy; 2022
  	</footer>
</div>
</body>
</html>
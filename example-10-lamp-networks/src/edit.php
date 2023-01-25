<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['surname1']) && isset($_POST['surname2']) && isset($_POST['age']) && isset($_POST['email'])) {
	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname1 = mysqli_real_escape_string($mysqli, $_POST['surname1']);
	$surname2 = mysqli_real_escape_string($mysqli, $_POST['surname2']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	// checking empty fields
	if(empty($name) || empty($surname1) || empty($age) || empty($email)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($surname1)) {
			echo "<font color='red'>Surname1 field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// updating the table
		$stmt = mysqli_prepare($mysqli, "UPDATE users SET name=?,surname1=?,surname2=?,age=?,email=? WHERE id=?");
		mysqli_stmt_bind_param($stmt, "sssisi", $name, $surname1, $surname2, $age, $email, $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
// getting id from url
$id = $_GET['id'];

$id = mysqli_real_escape_string($mysqli, $id);

// selecting data associated with this particular id
$stmt = mysqli_prepare($mysqli, "SELECT name, surname1, surname2, age, email FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $surname1, $surname2, $age, $email);
mysqli_stmt_fetch($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">	
	<title>Edit Data</title>
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
	<ul class="nav nav-tabs">
		<li class="nav-item"><a href="index.php" class="nav-link" >Home</a></li>
		<li class="nav-item"><a href="add.html" class="nav-link">Add</a></li>
		<li class="nav-item"><a href="" class="nav-link active">Edit</a></li>		
	</ul>
	<br/>

	<form action="edit.php" method="post">

		<div class="mb-3">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $name;?>" required>
		</div>

		<div class="mb-3">
			<label for="name">Surname1</label>
			<input type="text" class="form-control" name="surname1" value="<?php echo $surname1;?>" required>
		</div>

		<div class="mb-3">
			<label for="name">Surname2</label>
			<input type="text" class="form-control" name="surname2" value="<?php echo $surname2;?>">
		</div>

		<div class="mb-3">
			<label for="name">Age</label>
			<input type="number" class="form-control" name="age" value="<?php echo $age;?>" required>
		</div>

		<div class="mb-3">
			<label for="name">Email</label>
			<input type="email" class="form-control" name="email" value="<?php echo $email;?>" required>
		</div>

		<div class="mb-3">
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" value="Update" class="form-control  btn btn-primary">
		</div>
	</form>

	</main>	
	<footer class="pt-5 my-5 text-muted border-top">
	Created by the IES Celia team &copy; 2022
  	</footer>
</div>
</body>
</html>
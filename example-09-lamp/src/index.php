<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">	
	<title>Homepage</title>
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
		<li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
		<li class="nav-item"><a href="add.html" class="nav-link">Add</a></li>
	</ul>
	<br/>
	
	<table class="table table-striped table-bordered table-hover align-middle">
	<thead class="table-dark">
		<tr>
			<th>Name</th>
			<th>Surname1</th>
			<th>Surname2</th>
			<th>Age</th>
			<th>Email</th>
			<th>Update</th>
		</tr>
	</thead>
	<tbdody>

	<?php
	while($row = mysqli_fetch_array($result)) {
		echo "<tr>\n";
		echo "<td>".$row['name']."</td>\n";
		echo "<td>".$row['surname1']."</td>\n";
		echo "<td>".$row['surname2']."</td>\n";
		echo "<td>".$row['age']."</td>\n";
		echo "<td>".$row['email']."</td>\n";
		echo "<td>";
		echo "<a href=\"edit.php?id=$row[id]\" class=\"btn btn-primary\">Edit</a>\n";
		echo "<a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn btn-primary\">Delete</a></td>\n";
		echo "</td>";
		echo "</tr>\n";
	}

	mysqli_close($mysqli);
	?>
	
	</tbdody>
	</table>
	</main>

	<footer class="pt-5 my-5 text-muted border-top">
    Created by the IES Celia team &copy; 2022
  	</footer>
</div>
</body>
</html>
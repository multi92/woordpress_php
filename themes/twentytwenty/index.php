<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

use function PHPSTORM_META\map;

// session_start();

include 'logic.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Milos Mijajlovic CodingChellenge</title>
</head>

<body>
	<!-- <form action="" method="POST" enctype="multipart/form-data">
		<label>Chose Photo:</label><br>
			<input type="file" name="image" id="image" /><br>
			<input type="submit" name="upload" value="Upload Image/Data"/>

		</form> -->

	<div class="container mt-5">
		<form method="POST">
			<input type="text" placeholder="Title" class="form-control my-3 bg-dark text-white text-center" name="title">
			<textarea name="description" class="form-control my-3 bg-dark text-white" cols="30" rows="10"></textarea>
			<button class="btn btn-dark" name="new_post">Add Post</button>
		</form>
	</div>

	<!-- Display posts from database -->
	<div class="row">
		<!-- Display post from database -->
		<div class="col-12 col-lg-4">
			<div class="card text-black bg-light mt-5" style="height: 200px; width:400px">
				<div class="image">
					<?php
					// if (isset($_POST['new_post'])) {
					// 	$file = addslashes(file_get_contents($_FILES["image"]['tmp_name']));
					// 	$image = $_POST['image'];
					// 	$sql = "INSERT INTO wp_data(`image`) VALUES('$file', '$image')";
					// 	$query_run = mysqli_query($conn, $sql);

					// 	if ($query_run) {
					// 		echo 'uploaded';
					// 	} else {
					// 		echo 'xxx';
					// 	};
					// }


					?>
				</div>
				<div class="card-body">
					<?php
					$sql = "SELECT * FROM wp_data;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['title'] . "<br>";
							echo $row['description'];
						};
					};
					?>
				</div>
			</div>
		</div>
		<!-- Display post from database -->
		<div class="col-12 col-lg-4">
			<div class="card text-white bg-light mt-5" style="height: 200px; width:400px">
				<div class="card-body">
					<?php
					$sql = "SELECT * FROM wp_data1;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['title'] . "<br>";
							echo $row['description'];
						};
					};
					?>
				</div>
			</div>
		</div>
		<!-- Display post from database -->
		<div class="col-12 col-lg-4">
			<div class="card text-white bg-light mt-5" style="height: 200px; width:400px">
				<div class="card-body">

					<?php
					$sql = "SELECT * FROM wp_data;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['title'] . "<br>";
							echo $row['description'];
						};
					};
					?>
				</div>
			</div>
		</div>


	</div>


	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>

<?php





?>
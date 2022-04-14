<?php

// Initialize a database connection
$conn = mysqli_connect("localhost", "root", "", "milos_chellenge");
// Destroy if not possible to create a connection
if (!$conn) {
	echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}



// Create a new post
if (isset($_REQUEST['new_post'])) {
	$title = $_REQUEST['title'];
	$description = $_REQUEST['description'];

	$sql = "INSERT INTO wp_data(title, description) VALUES('$title', '$description')";
	mysqli_query($conn, $sql);
}

// Get post data based on id
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM wp_data WHERE id = $id";
    $query = mysqli_query($conn, $sql);
}

//img 

// if(isset($_POST['upload'])) {
//     $file = addslashes(file_get_contents($_FILES["image"]['tmp_name']));
//     $image = $_POST['image'];
//     $sql = "INSERT INTO wp_data(`image`) VALUES('$file', '$image')";
//     $query_run = mysqli_query($conn, $sql);
    
//     if($query_run) {
//         echo 'uploaded';
//     }else{
//         echo 'xxx';
//     };
// }



?>

   
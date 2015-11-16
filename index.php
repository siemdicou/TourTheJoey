<?php 
	require_once 'config/config.php';
	require_once 'includes/database.php';
	include 'views/head.php';
	include 'views/header.php';
	include 'views/body.php';
	// include 'views/body-sidebar.php';
	include 'views/footer.php';
	$result = $mysqli->query("SELECT * FROM users");
    // while($pictures=$result->fetch_assoc()){
    
 ?>
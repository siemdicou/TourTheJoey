<img src="img/prijsvraag.png" class="prijsvraag_img">
<?php 
	$id=$_GET['id'];
	$result = $mysqli->query("SELECT * FROM songs WHERE id='".$id."'");
	echo $result['id'];

 ?>
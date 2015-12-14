<?php
$id=$_GET['id'];
$result = $mysqli->query("SELECT * FROM songs WHERE id='".$id."'");
$ask=$result->fetch_assoc();

?>